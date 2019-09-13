<?php

namespace Drupal\products\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides a product listings resource.
 *
 * @RestResource(
 *   id = "product_listings",
 *   label = @Translation("Product Listings"),
 *   uri_paths = {
 *     "canonical" = "/api/v1/productListings"
 *   }
 * )
 */
class ProductListings extends ResourceBase {

  /**
   * Rest resource for product listings.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Rest resource query parameters.
   *
   * @return \Drupal\rest\ResourceResponse
   *   Json response.
   */
  public function get(Request $request) {
    $product = $request->query->get('categoryId');




}
