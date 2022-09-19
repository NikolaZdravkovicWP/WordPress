<?php

	namespace ShortPixel\AI\Options;

	class Category {
		public static function _() {
			return new self();
		}

		/**
		 * Getter
		 *
		 * @param $name
		 *
		 * @return mixed
		 */
		public function __get( $name ) {
			return isset( $this->$name ) ? $this->$name : null;
		}

		/**
		 * Setter
		 *
		 * @param string         $name
		 * @param Category|Option $value
		 */
		public function __set( $name, $value ) {
			$this->$name = $value;
		}
	}