<?php

namespace App\Repository\InterfaceDir;
interface ProductInterface
{
    /*
     * This take column name and status from the repository
     *  return the product from the product table
     */
    public function getProductBycolumnName($columnName, $status);

    /*
     * This  return best seller product calculation the most selling product in order table
     */
    public function getHomeBestSellerProduct($tabName);

    /*
     *
     */

    public function getFeaturedProduct();

    /*
     * take product $slug as input
     * return the full product details
     */

    public function getSingleProductBySlug($slug);

    /*
        * take category name as input
        * return the full product list of this category
        */

    public function getProductByCategoryName($name);

    /*
     * this tale id as input
     * check the availablity in product table
     * return boolean
     */

    public function checkStock($id);

    public function preventAddToCart($id,$qty);


}