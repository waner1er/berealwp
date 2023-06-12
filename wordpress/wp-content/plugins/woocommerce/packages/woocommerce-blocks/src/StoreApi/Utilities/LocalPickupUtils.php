<?php
namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Util class for local pickup related functionality, this contains methods that need to be accessed from places besides
 * the ShippingController, i.e. the OrderController.
 */
class LocalPickupUtils {
	/**
	 * Gets a list of payment method ids that support the 'local-pickup' feature.
	 *
	 * @return string[] List of payment method ids that support the 'local-pickup' feature.
	 */
	public static function get_local_pickup_method_ids() {
		$all_methods_supporting_local_pickup = array_reduce(
			WC()->shipping()->get_shipping_methods(),
			function( $methods, $method ) {
				if ( $method->supports( 'local-pickup' ) ) {
					$methods[] = $method->id;
				}
				return $methods;
			},
			array()
		);

		// We use array_values because this will be used in JS, so we don't need the (numerical) keys.
		return array_values(
		// This array_unique is necessary because WC()->shipping()->get_shipping_methods() can return duplicates.
			array_unique(
				$all_methods_supporting_local_pickup
			)
		);
	}
}
