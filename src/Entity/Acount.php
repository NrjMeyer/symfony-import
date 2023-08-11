<?php

namespace App\Entity;

use App\Repository\AcountRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcountRepository::class)]
class Acount
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $businessAcount = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $eventAcount = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $lastEventAcount = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $fileNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $salutation = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $currentCarOwner = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $streetNumberName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $complementAdress = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $postalCode = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $city = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cellPhone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jobPhone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mail = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $circulationDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $buyDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable:true)]
    private ?\DateTimeInterface $eventLastDate = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $mark = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $model = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $matricule = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $prospectType = null;

    #[ORM\Column(nullable: true)]
    private ?int $kilometrage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fuelType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sellerVn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sellerVo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $factureComment = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $VnVoType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dirNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $intermediateSell = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable:true)]
    private ?\DateTimeInterface $eventDate = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $originEvent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBusinessAcount(): ?string
    {
        return $this->businessAcount;
    }

    public function setBusinessAcount(string $businessAcount): static
    {
        $this->businessAcount = $businessAcount;

        return $this;
    }

    public function getEventAcount(): ?string
    {
        return $this->eventAcount;
    }

    public function setEventAcount(?string $eventAcount): static
    {
        $this->eventAcount = $eventAcount;

        return $this;
    }

    public function getLastEventAcount(): ?string
    {
        return $this->lastEventAcount;
    }

    public function setLastEventAcount(?string $lastEventAcount): static
    {
        $this->lastEventAcount = $lastEventAcount;

        return $this;
    }

    public function getFileNumber(): ?string
    {
        return $this->fileNumber;
    }

    public function setFileNumber(?string $fileNumber): static
    {
        $this->fileNumber = $fileNumber;

        return $this;
    }

    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    public function setSalutation(?string $salutation): static
    {
        $this->salutation = $salutation;

        return $this;
    }

    public function getCurrentCarOwner(): ?string
    {
        return $this->currentCarOwner;
    }

    public function setCurrentCarOwner(?string $currentCarOwner): static
    {
        $this->currentCarOwner = $currentCarOwner;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getStreetNumberName(): ?string
    {
        return $this->streetNumberName;
    }

    public function setStreetNumberName(?string $streetNumberName): static
    {
        $this->streetNumberName = $streetNumberName;

        return $this;
    }

    public function getComplementAdress(): ?string
    {
        return $this->complementAdress;
    }

    public function setComplementAdress(?string $complementAdress): static
    {
        $this->complementAdress = $complementAdress;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): static
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCellPhone(): ?string
    {
        return $this->cellPhone;
    }

    public function setCellPhone(?string $cellPhone): static
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    public function getJobPhone(): ?string
    {
        return $this->jobPhone;
    }

    public function setJobPhone(?string $jobPhone): static
    {
        $this->jobPhone = $jobPhone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getCirculationDate(): ?\DateTimeInterface
    {
        return $this->circulationDate;
    }

    public function setCirculationDate(?\DateTimeInterface $circulationDate): static
    {
        $this->circulationDate = $circulationDate;

        return $this;
    }

    public function getBuyDate(): ?\DateTimeInterface
    {
        return $this->buyDate;
    }

    public function setBuyDate(?\DateTimeInterface $buyDate): static
    {
        $this->buyDate = $buyDate;

        return $this;
    }

    public function getEventLastDate(): ?\DateTimeInterface
    {
        return $this->eventLastDate;
    }

    public function setEventLastDate(?\DateTimeInterface $eventLastDate): static
    {
        $this->eventLastDate = $eventLastDate;

        return $this;
    }

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(?string $mark): static
    {
        $this->mark = $mark;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getProspectType(): ?string
    {
        return $this->prospectType;
    }

    public function setProspectType(?string $prospectType): static
    {
        $this->prospectType = $prospectType;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?int $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getFuelType(): ?string
    {
        return $this->fuelType;
    }

    public function setFuelType(?string $fuelType): static
    {
        $this->fuelType = $fuelType;

        return $this;
    }

    public function getSellerVn(): ?string
    {
        return $this->sellerVn;
    }

    public function setSellerVn(?string $sellerVn): static
    {
        $this->sellerVn = $sellerVn;

        return $this;
    }

    public function getSellerVo(): ?string
    {
        return $this->sellerVo;
    }

    public function setSellerVo(?string $sellerVo): static
    {
        $this->sellerVo = $sellerVo;

        return $this;
    }

    public function getFactureComment(): ?string
    {
        return $this->factureComment;
    }

    public function setFactureComment(?string $factureComment): static
    {
        $this->factureComment = $factureComment;

        return $this;
    }

    public function getVnVoType(): ?string
    {
        return $this->VnVoType;
    }

    public function setVnVoType(?string $VnVoType): static
    {
        $this->VnVoType = $VnVoType;

        return $this;
    }

    public function getDirNumber(): ?string
    {
        return $this->dirNumber;
    }

    public function setDirNumber(?string $dirNumber): static
    {
        $this->dirNumber = $dirNumber;

        return $this;
    }

    public function getIntermediateSell(): ?string
    {
        return $this->intermediateSell;
    }

    public function setIntermediateSell(?string $intermediateSell): static
    {
        $this->intermediateSell = $intermediateSell;

        return $this;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->eventDate;
    }

    public function setEventDate(?\DateTimeInterface $eventDate): static
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    public function getOriginEvent(): ?string
    {
        return $this->originEvent;
    }

    public function setOriginEvent(?string $originEvent): static
    {
        $this->originEvent = $originEvent;

        return $this;
    }
}
