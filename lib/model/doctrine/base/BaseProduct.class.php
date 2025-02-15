<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Product', 'doctrine');

/**
 * BaseProduct
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $title_en
 * @property string $code
 * @property integer $category_id
 * @property string $summary
 * @property string $summary_en
 * @property string $image
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 * @property string $image5
 * @property string $image6
 * @property string $image7
 * @property string $image8
 * @property string $body
 * @property string $body_en
 * @property string $pdf
 * @property string $video
 * @property string $color
 * @property string $keywords
 * @property integer $has_leasing
 * @property float $rental_cost
 * @property integer $sort
 * @property integer $is_featured
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property ProductCategory $ProductCategory
 * 
 * @method integer         getId()              Returns the current record's "id" value
 * @method string          getTitle()           Returns the current record's "title" value
 * @method string          getTitleEn()         Returns the current record's "title_en" value
 * @method string          getCode()            Returns the current record's "code" value
 * @method integer         getCategoryId()      Returns the current record's "category_id" value
 * @method string          getSummary()         Returns the current record's "summary" value
 * @method string          getSummaryEn()       Returns the current record's "summary_en" value
 * @method string          getImage()           Returns the current record's "image" value
 * @method string          getImage1()          Returns the current record's "image1" value
 * @method string          getImage2()          Returns the current record's "image2" value
 * @method string          getImage3()          Returns the current record's "image3" value
 * @method string          getImage4()          Returns the current record's "image4" value
 * @method string          getImage5()          Returns the current record's "image5" value
 * @method string          getImage6()          Returns the current record's "image6" value
 * @method string          getImage7()          Returns the current record's "image7" value
 * @method string          getImage8()          Returns the current record's "image8" value
 * @method string          getBody()            Returns the current record's "body" value
 * @method string          getBodyEn()          Returns the current record's "body_en" value
 * @method string          getPdf()             Returns the current record's "pdf" value
 * @method string          getVideo()           Returns the current record's "video" value
 * @method string          getColor()           Returns the current record's "color" value
 * @method string          getKeywords()        Returns the current record's "keywords" value
 * @method integer         getHasLeasing()      Returns the current record's "has_leasing" value
 * @method float           getRentalCost()      Returns the current record's "rental_cost" value
 * @method integer         getSort()            Returns the current record's "sort" value
 * @method integer         getIsFeatured()      Returns the current record's "is_featured" value
 * @method timestamp       getCreatedAt()       Returns the current record's "created_at" value
 * @method timestamp       getUpdatedAt()       Returns the current record's "updated_at" value
 * @method ProductCategory getProductCategory() Returns the current record's "ProductCategory" value
 * @method Product         setId()              Sets the current record's "id" value
 * @method Product         setTitle()           Sets the current record's "title" value
 * @method Product         setTitleEn()         Sets the current record's "title_en" value
 * @method Product         setCode()            Sets the current record's "code" value
 * @method Product         setCategoryId()      Sets the current record's "category_id" value
 * @method Product         setSummary()         Sets the current record's "summary" value
 * @method Product         setSummaryEn()       Sets the current record's "summary_en" value
 * @method Product         setImage()           Sets the current record's "image" value
 * @method Product         setImage1()          Sets the current record's "image1" value
 * @method Product         setImage2()          Sets the current record's "image2" value
 * @method Product         setImage3()          Sets the current record's "image3" value
 * @method Product         setImage4()          Sets the current record's "image4" value
 * @method Product         setImage5()          Sets the current record's "image5" value
 * @method Product         setImage6()          Sets the current record's "image6" value
 * @method Product         setImage7()          Sets the current record's "image7" value
 * @method Product         setImage8()          Sets the current record's "image8" value
 * @method Product         setBody()            Sets the current record's "body" value
 * @method Product         setBodyEn()          Sets the current record's "body_en" value
 * @method Product         setPdf()             Sets the current record's "pdf" value
 * @method Product         setVideo()           Sets the current record's "video" value
 * @method Product         setColor()           Sets the current record's "color" value
 * @method Product         setKeywords()        Sets the current record's "keywords" value
 * @method Product         setHasLeasing()      Sets the current record's "has_leasing" value
 * @method Product         setRentalCost()      Sets the current record's "rental_cost" value
 * @method Product         setSort()            Sets the current record's "sort" value
 * @method Product         setIsFeatured()      Sets the current record's "is_featured" value
 * @method Product         setCreatedAt()       Sets the current record's "created_at" value
 * @method Product         setUpdatedAt()       Sets the current record's "updated_at" value
 * @method Product         setProductCategory() Sets the current record's "ProductCategory" value
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProduct extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('title_en', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('code', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('category_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('summary', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('summary_en', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image1', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image2', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image3', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image4', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image5', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image6', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image7', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image8', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('body', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('body_en', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('pdf', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('video', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('color', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('has_leasing', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('rental_cost', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('sort', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_featured', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ProductCategory', array(
             'local' => 'category_id',
             'foreign' => 'id'));
    }
}