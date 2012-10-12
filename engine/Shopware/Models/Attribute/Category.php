<?php

namespace Shopware\Models\Attribute;
use Shopware\Components\Model\ModelEntity,
    Doctrine\ORM\Mapping AS ORM,
    Symfony\Component\Validator\Constraints as Assert,
    Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="s_categories_attributes")
 */
class Category extends ModelEntity
{

/**
 * @var integer $id
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="IDENTITY")
 * @ORM\Column(name="id", type="integer", nullable=false)
 */
 protected $id;


/**
 * @var integer $categoryId
 *
 * @ORM\Column(name="categoryID", type="integer", nullable=true)
 */
 protected $categoryId;


/**
 * @var string $attribute1
 *
 * @ORM\Column(name="attribute1", type="string", nullable=true)
 */
 protected $attribute1;


/**
 * @var string $attribute2
 *
 * @ORM\Column(name="attribute2", type="string", nullable=true)
 */
 protected $attribute2;


/**
 * @var string $attribute3
 *
 * @ORM\Column(name="attribute3", type="string", nullable=true)
 */
 protected $attribute3;


/**
 * @var string $attribute4
 *
 * @ORM\Column(name="attribute4", type="string", nullable=true)
 */
 protected $attribute4;


/**
 * @var string $attribute5
 *
 * @ORM\Column(name="attribute5", type="string", nullable=true)
 */
 protected $attribute5;


/**
 * @var string $attribute6
 *
 * @ORM\Column(name="attribute6", type="string", nullable=true)
 */
 protected $attribute6;


/**
 * @var \Shopware\Models\Category\Category
 *
 * @ORM\OneToOne(targetEntity="Shopware\Models\Category\Category", inversedBy="attribute")
 * @ORM\JoinColumns({
 *   @ORM\JoinColumn(name="categoryID", referencedColumnName="id")
 * })
 */
private $category;
        

public function getId()
{
    return $this->id;
}
        

public function setId($id)
{
    $this->id = $id;
    return $this;
}
        

public function getCategoryId()
{
    return $this->categoryId;
}
        

public function setCategoryId($categoryId)
{
    $this->categoryId = $categoryId;
    return $this;
}
        

public function getAttribute1()
{
    return $this->attribute1;
}
        

public function setAttribute1($attribute1)
{
    $this->attribute1 = $attribute1;
    return $this;
}
        

public function getAttribute2()
{
    return $this->attribute2;
}
        

public function setAttribute2($attribute2)
{
    $this->attribute2 = $attribute2;
    return $this;
}
        

public function getAttribute3()
{
    return $this->attribute3;
}
        

public function setAttribute3($attribute3)
{
    $this->attribute3 = $attribute3;
    return $this;
}
        

public function getAttribute4()
{
    return $this->attribute4;
}
        

public function setAttribute4($attribute4)
{
    $this->attribute4 = $attribute4;
    return $this;
}
        

public function getAttribute5()
{
    return $this->attribute5;
}
        

public function setAttribute5($attribute5)
{
    $this->attribute5 = $attribute5;
    return $this;
}
        

public function getAttribute6()
{
    return $this->attribute6;
}
        

public function setAttribute6($attribute6)
{
    $this->attribute6 = $attribute6;
    return $this;
}
        

public function getCategory()
{
    return $this->category;
}

public function setCategory($category)
{
    $this->category = $category;
    return $this;
}
        
}