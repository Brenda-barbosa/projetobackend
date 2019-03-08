<?php
class test2
{
    private $category_name;
    private $category_code;
public function __construct($category_name,$category_code)
{
    $this-> category_name = $category_name;
    $this -> category_code = $category_code;
}
    /**
     * @return mixed
     */
    public function getcategory_name()
    {
        return $this->category_name = htmlspecialchars($_POST['category-name']);
    }
    /**
     * @param mixed $category_name
     */
    public function setName($category_name)
    {
        $this->category_name = $category_name;
    }
    /**
     * @return mixed
     */
    public function getcategory_code()
    {
        return $this->category_code = htmlspecialchars($_POST['category-code']);
    }
    /**
     * @param mixed $category_code
     */
    public function setcategory_code ($category_code)
    {
        $this->code = $category_code;
    }
}
?>