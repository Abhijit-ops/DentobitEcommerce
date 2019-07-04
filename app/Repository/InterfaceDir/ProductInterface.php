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
     * this take id as input
     * check the availablity in product table
     * return boolean
     */

    public function checkStock($id);
    /*
        * this tale product id as input
        * check the availablity in product table
        * if response return then user can not add the product to the cart
        * return boolean
        */
    public function preventAddToCart($id,$qty);

    /*
     * get all the product Gallery image using id as input
     * return list of available images
     */
    public function getProductGalleryImage($slug);
        /*
         * get new arrival Product from the product table
         */
    public function getNewArriValProduct();

/*
 * return random product from the same category
 */

public function getRelatedProduct($id);

}