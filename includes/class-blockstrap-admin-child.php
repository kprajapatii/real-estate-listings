<?php

if ( class_exists( 'BlockStrap_Admin' ) ) {

	class BlockStrap_Admin_Child extends BlockStrap_Admin {
		public function __construct() {
			parent::__construct();
		}

		/**
		 * Get the theme title.
		 *
		 * @return string|null
		 */
		public function get_theme_title() {
			return __( 'Real Estate', 'real-estate-listings' );
		}

		/**
		 * Get the array of demo pages.
		 *
		 * @return array[]
		 */
//		public function get_demo_pages() {
//			return array(
//				'about'   => array(
//					'title' => __( 'About', 'real-estate-listings' ),
//					'slug'  => 'about',
//					'desc'  => $this->get_template_content( dirname( __FILE__ ) . '/../patterns/about-page.php' ),
//				),
//				'courses' => array(
//					'title' => __( 'Courses', 'real-estate-listings' ),
//					'slug'  => 'courses',
//					'desc'  => $this->get_template_content( dirname( __FILE__ ) . '/../patterns/courses-page.php' ),
//				),
//				'contact' => array(
//					'title' => __( 'Contact Us', 'real-estate-listings' ),
//					'slug'  => 'contact',
//					'desc'  => $this->get_template_content( dirname( __FILE__ ) . '/../patterns/contact-page.php' ),
//				),
//				'blog'    => array(
//					'title'   => __( 'Our Blog', 'real-estate-listings' ),
//					'slug'    => 'blog',
//					'desc'    => $this->get_template_content( dirname( __FILE__ ) . '/../patterns/blog-page.php' ),
//					'is_blog' => true,
//				),
//			);
//		}

		/**
		 * Get the required plugins details array.
		 *
		 * @return array
		 */
		public function get_required_plugins() {
			return array(
				'blockstrap-page-builder-blocks' => __( 'BlockStrap Builder', 'real-estate-listings' ),
				'geodirectory' => __( 'GeoDirectory', 'real-estate-listings' ),
				'userswp' => __( 'UsersWP', 'real-estate-listings' ),
				// 'real-estate-directory' => __( 'Real Estate Directory', 'real-estate-listings' ), // @todo awaiting approval to repo
			);
		}

		/**
		 * This can be set in child themes to set the GD dummy data default type.
		 *
		 * @param $type
		 * @param $post_type
		 *
		 * @return mixed
		 */
		public function gd_set_default_dummy_data_type( $type, $post_type ) {

			if ( ! $type ) {
				$type = 'property_sale';
			}
			return $type;
		}


	}

}
