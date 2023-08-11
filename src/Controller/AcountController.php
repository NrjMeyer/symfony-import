<?php

namespace App\Controller;

use App\Entity\Acount;
use App\Form\AcountType;
use App\Form\ImportType;
use App\Repository\AcountRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class AcountController extends AbstractController
{
    private $em;
    private $repoAcount;

    public function __construct(
        EntityManagerInterface $em,
        AcountRepository $repoAcount
    )
    {
        $this->em = $em;
        $this->repoAcount = $repoAcount;
    }
    #[Route('/profile/list-acount', name: 'list_acount')]
    public function list_acount(Request $request): JsonResponse
    {
        $response = new Response();
        $result = $this->repoAcount->acountList();
        $dataJson =  json_encode($result);

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->setContent($dataJson);
        return $response;
    }
    #[Route('/', name: 'home_acount')]
    public function home_acount(Request $request): Response
    {
        $acounts = $this->repoAcount->acountList();
        return $this->render('acount/index.html.twig', [
            'acounts' => $acounts,
        ]);
    }
    #[Route('/create-acount', name: 'app_acount')]
    public function index(Request $request)
    {
        $form = $this->createForm(ImportType::class);
		$form->handleRequest($request);
		if($form->isSubmitted() && $form->isValid()){
            $fichier = $form->get('fichier')->getData();
            $originalFilename1 = pathinfo($fichier->getClientOriginalName(), PATHINFO_FILENAME);
            // $safeFilename1 = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename1);
            // dd($safeFilename1);
            $newFilename1 = $originalFilename1 . '.' . $fichier->guessExtension();
            
            $fileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($fichier->getRealPath()); // d'après dd($fichier)
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($fileType); // ty le taloha
            /* $sheetname = "FOURNISSEURS";
                $reader->setLoadSheetsOnly($sheetname); */
            $spreadsheet = $reader->load($fichier->getRealPath()); // le nom temporaire
            $data = $spreadsheet->getActiveSheet()->toArray();
            $errors = [];
            
            try {
                $this->em->beginTransaction();
                for($i = 1; $i< count($data); $i++){
                    try{
                        //dd('ato');
                        $acount = new Acount();
                        $acount->setBusinessAcount($data[$i][0]);
                        $acount->setEventAcount($data[$i][1]);
                        $acount->setLastEventAcount($data[$i][2]);
                        $acount->setFileNumber($data[$i][3]);
                        $acount->setSalutation($data[$i][4]);
                        $acount->setCurrentCarOwner($data[$i][5]);
                        $acount->setName($data[$i][6]);
                        $acount->setLastname($data[$i][7]);
                        $acount->setStreetNumberName($data[$i][8]);
                        $acount->setComplementAdress($data[$i][9]);
                        $acount->setPostalCode($data[$i][10]);
                        $acount->setCity($data[$i][11]);
                        $acount->setPhone($data[$i][12]);
                        $acount->setCellPhone($data[$i][13]);
                        $acount->setJobPhone($data[$i][14]);
                        $acount->setMail($data[$i][15]);
                        $acount->setCirculationDate(date_create_from_format('d/m/Y', $data[$i][16]) ? date_create_from_format('d/m/Y', $data[$i][16]) : null);
                        $acount->setBuyDate(date_create_from_format('d/m/Y', $data[$i][17]) ?  : null);
                        $acount->setEventLastDate(date_create_from_format('d/m/Y', $data[$i][18]) ? date_create_from_format('d/m/Y', $data[$i][18]) : null);
                        $acount->setMark($data[$i][19]);
                        $acount->setModel($data[$i][20]);
                        $acount->setVersion($data[$i][21]);
                        $acount->setVin($data[$i][22]);
                        $acount->setMatricule($data[$i][23]);
                        $acount->setProspectType($data[$i][24]);
                        $acount->setKilometrage($data[$i][25]);
                        $acount->setFuelType($data[$i][26]);
                        $acount->setSellerVn($data[$i][27]);
                        $acount->setSellerVo($data[$i][28]);
                        $acount->setFactureComment($data[$i][29]);
                        $acount->setVnVoType($data[$i][30]);
                        $acount->setDirNumber($data[$i][31]);
                        $acount->setIntermediateSell($data[$i][32]);
                        $acount->setEventDate(date_create_from_format('d/m/Y', $data[$i][33]) ? date_create_from_format('d/m/Y', $data[$i][33]) : null);
                        $acount->setOriginEvent($data[$i][34]);
                        //dd($acount);
                        // Now you can persist the populated instance of Acount using Doctrine EntityManager
                        $this->em->persist($acount);
                    }
                    catch (\Exception $e) {
                        $errors[] = "Erreur lors de l'import de la ligne {$i}: " . $e->getMessage();
                    }
                }
                $this->em->flush();
                
                $this->em->commit();
                if (!empty($errors)) {
                   
                    foreach ($errors as $error) {
                        $this->addFlash('error', $error);
                    }
                } else {
                    
                    $this->addFlash('success', 'Toutes les lignes ont été importées avec succès.');
                    return $this->redirectToRoute("home_acount");
                }
            }catch(\Exception $e){
                //dd("ato ve 4");
                $this->em->rollback();
                //$this->addFlash('error', 'Une erreur s\'est produite lors de l\'import : ' . $e->getMessage());
                return new Response('Une erreur s\'est produite lors de l\'import : ' . $e->getMessage());
            }
        }
        return $this->render('acount/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
