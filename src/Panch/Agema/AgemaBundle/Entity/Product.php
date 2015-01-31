<?php

namespace Panch\Agema\AgemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Product
 *
 * @ORM\Table(name="agema_product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=25)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="string", length=50)
     */
    private $shortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="color_correction", type="string", length=255)
     */
    private $colorCorrection;

    /**
     * @var string
     *
     * @ORM\Column(name="clear_aperture", type="string", length=255)
     */
    private $clearAperture;

    /**
     * @var string
     *
     * @ORM\Column(name="focal_length", type="string", length=255)
     */
    private $focalLength;

    /**
     * @var float
     *
     * @ORM\Column(name="resolution", type="float")
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="magnification_range", type="string", length=255)
     */
    private $magnificationRange;

    /**
     * @var float
     *
     * @ORM\Column(name="limit_visual_magnitude", type="float")
     */
    private $limitVisualMagnitude;

    /**
     * @var string
     *
     * @ORM\Column(name="tube", type="text")
     */
    private $tube;

    /**
     * @var string
     *
     * @ORM\Column(name="focuser", type="text")
     */
    private $focuser;

    /**
     * @var string
     *
     * @ORM\Column(name="field_corrector", type="text")
     */
    private $fieldCorrector;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set colorCorrection
     *
     * @param string $colorCorrection
     * @return Product
     */
    public function setColorCorrection($colorCorrection)
    {
        $this->colorCorrection = $colorCorrection;

        return $this;
    }

    /**
     * Get colorCorrection
     *
     * @return string 
     */
    public function getColorCorrection()
    {
        return $this->colorCorrection;
    }

    /**
     * Set clearAperture
     *
     * @param string $clearAperture
     * @return Product
     */
    public function setClearAperture($clearAperture)
    {
        $this->clearAperture = $clearAperture;

        return $this;
    }

    /**
     * Get clearAperture
     *
     * @return string 
     */
    public function getClearAperture()
    {
        return $this->clearAperture;
    }

    /**
     * Set focalLength
     *
     * @param string $focalLength
     * @return Product
     */
    public function setFocalLength($focalLength)
    {
        $this->focalLength = $focalLength;

        return $this;
    }

    /**
     * Get focalLength
     *
     * @return string 
     */
    public function getFocalLength()
    {
        return $this->focalLength;
    }

    /**
     * Set resolution
     *
     * @param float $resolution
     * @return Product
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return float 
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set magnificationRange
     *
     * @param string $magnificationRange
     * @return Product
     */
    public function setMagnificationRange($magnificationRange)
    {
        $this->magnificationRange = $magnificationRange;

        return $this;
    }

    /**
     * Get magnificationRange
     *
     * @return string 
     */
    public function getMagnificationRange()
    {
        return $this->magnificationRange;
    }

    /**
     * Set limitVisualMagnitude
     *
     * @param float $limitVisualMagnitude
     * @return Product
     */
    public function setLimitVisualMagnitude($limitVisualMagnitude)
    {
        $this->limitVisualMagnitude = $limitVisualMagnitude;

        return $this;
    }

    /**
     * Get limitVisualMagnitude
     *
     * @return float 
     */
    public function getLimitVisualMagnitude()
    {
        return $this->limitVisualMagnitude;
    }

    /**
     * Set tube
     *
     * @param string $tube
     * @return Product
     */
    public function setTube($tube)
    {
        $this->tube = $tube;

        return $this;
    }

    /**
     * Get tube
     *
     * @return string 
     */
    public function getTube()
    {
        return $this->tube;
    }

    /**
     * Set focuser
     *
     * @param string $focuser
     * @return Product
     */
    public function setFocuser($focuser)
    {
        $this->focuser = $focuser;

        return $this;
    }

    /**
     * Get focuser
     *
     * @return string 
     */
    public function getFocuser()
    {
        return $this->focuser;
    }

    /**
     * Set fieldCorrector
     *
     * @param string $fieldCorrector
     * @return Product
     */
    public function setFieldCorrector($fieldCorrector)
    {
        $this->fieldCorrector = $fieldCorrector;

        return $this;
    }

    /**
     * Get fieldCorrector
     *
     * @return string 
     */
    public function getFieldCorrector()
    {
        return $this->fieldCorrector;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Product
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
