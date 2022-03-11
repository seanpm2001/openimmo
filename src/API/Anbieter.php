<?php

namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anbieter
 * Anbieterangaben
 * @XmlRoot("anbieter")
 */
class Anbieter
{
    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $anbieternr = null;

    /**
     * @Type("string")
     * @var string
     * @SkipWhenEmpty
     */
    protected string $firma = '';

    /**
     * @Type("string")
     * @var string
     * @SkipWhenEmpty
     */
    protected string $openimmoAnid = '';

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $lizenzkennung = null;

    /**
     * @Type("Ujamii\OpenImmo\API\Anhang")
     * @var ?\Ujamii\OpenImmo\API\Anhang
     */
    protected ?Anhang $anhang = null;

    /**
     * @XmlList(inline = true, entry = "immobilie")
     * @Type("array<Ujamii\OpenImmo\API\Immobilie>")
     * @var ?\Ujamii\OpenImmo\API\Immobilie[]
     */
    protected ?array $immobilie = [];

    /**
     * @Type("string")
     * @var ?string
     */
    protected ?string $impressum = null;

    /**
     * @Type("Ujamii\OpenImmo\API\ImpressumStrukt")
     * @var ?\Ujamii\OpenImmo\API\ImpressumStrukt
     */
    protected ?ImpressumStrukt $impressumStrukt = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedSimplefield[]
     */
    protected ?array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedAnyfield[]
     */
    protected ?array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>")
     * @var ?\Ujamii\OpenImmo\API\UserDefinedExtend[]
     */
    protected ?array $userDefinedExtend = [];

    public function getAnbieternr(): ?string
    {
        return $this->anbieternr;
    }

    public function setAnbieternr(?string $anbieternr): Anbieter
    {
        $this->anbieternr = $anbieternr;
        return $this;
    }

    public function getFirma(): string
    {
        return $this->firma;
    }

    public function setFirma(string $firma): Anbieter
    {
        $this->firma = $firma;
        return $this;
    }

    public function getOpenimmoAnid(): string
    {
        return $this->openimmoAnid;
    }

    public function setOpenimmoAnid(string $openimmoAnid): Anbieter
    {
        $this->openimmoAnid = $openimmoAnid;
        return $this;
    }

    public function getLizenzkennung(): ?string
    {
        return $this->lizenzkennung;
    }

    public function setLizenzkennung(?string $lizenzkennung): Anbieter
    {
        $this->lizenzkennung = $lizenzkennung;
        return $this;
    }

    public function getAnhang(): ?Anhang
    {
        return $this->anhang;
    }

    public function setAnhang(?Anhang $anhang): Anbieter
    {
        $this->anhang = $anhang;
        return $this;
    }

    public function getImmobilie(): ?array
    {
        return $this->immobilie;
    }

    public function setImmobilie(?array $immobilie): Anbieter
    {
        $this->immobilie = $immobilie;
        return $this;
    }

    public function getImpressum(): ?string
    {
        return $this->impressum;
    }

    public function setImpressum(?string $impressum): Anbieter
    {
        $this->impressum = $impressum;
        return $this;
    }

    public function getImpressumStrukt(): ?ImpressumStrukt
    {
        return $this->impressumStrukt;
    }

    public function setImpressumStrukt(?ImpressumStrukt $impressumStrukt): Anbieter
    {
        $this->impressumStrukt = $impressumStrukt;
        return $this;
    }

    public function getUserDefinedSimplefield(): ?array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(?array $userDefinedSimplefield): Anbieter
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    public function getUserDefinedAnyfield(): ?array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(?array $userDefinedAnyfield): Anbieter
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    public function getUserDefinedExtend(): ?array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(?array $userDefinedExtend): Anbieter
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }
}
