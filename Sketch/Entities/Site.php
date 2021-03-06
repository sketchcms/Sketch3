<?php
namespace Sketch\Entities;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="Sketch\Entities\Repository\SiteRepository")
 *
 */
class Site
{
    use \Sketch\Traits\GetterSetter;
    use \Sketch\Traits\Extensions;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(length=255) */
    private $sitename;

    /** @ORM\Column(length=255, nullable=true) */
    private $siteemail;
    
    /** @ORM\Column(length=255, nullable=true) */
    private $sitefromemail;

    /** @ORM\Column(length=15, nullable=true) */
    private $sitephone;
    
    /** @ORM\Column(length=15, nullable=true) */
    private $sitemobile;

    /** @ORM\Column(length=255, nullable=true) */
    private $siteaddress;

    /** @ORM\Column(length=50, nullable=true) */
    private $sitesuburb;

    /** @ORM\Column(length=50, nullable=true) */
    private $sitestate;

    /** @ORM\Column(length=150, nullable=true) */
    private $sitecity;

    /** @ORM\Column(length=10, nullable=true) */
    private $sitezip;

    /** @ORM\Column(length=150, nullable=true) */
    private $sitecountry;
    
    /** @ORM\Column(type="integer") */
    private $sitepublished = 1;

    /** @ORM\Column(length=255, nullable=true) */
    private $sitelogo;

    /** @ORM\Column(type="string", nullable=true) */
    private $sitetagline;

    /** @ORM\Column(type="string", nullable=true) */
    private $footertext;

    /** @ORM\Column(length=100, nullable=true) */
    private $domainname;

    /** @ORM\Column(length=255, nullable=true) */
    private $paymentPage;

    /** @ORM\Column(length=255, nullable=true) */
    private $contactPage;

    /** @ORM\Column(length=255, nullable=true) */
    private $paymentType;

    /** @ORM\Column(length=255, nullable=true) */
    private $paymentDps;

    /** @ORM\Column(length=255, nullable=true) */
    private $paymentPaypal;

    /** @ORM\Column(length=255, nullable=true) */
    private $paymentFetch;

    /** @ORM\Column(length=255) */
    private $themePath = "theme";
}
