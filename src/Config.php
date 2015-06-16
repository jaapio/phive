<?php
namespace TheSeer\Phive {

    class Config {

        /**
         * @var Environment
         */
        private $environment;

        /**
         * @param Environment $environment
         */
        public function __construct(Environment $environment) {
            $this->environment = $environment;
        }

        /**
         * @return Directory
         */
        public function getHomeDirectory() {
            return $this->environment->getHomeDirectory()->child('.phive');
        }

        /**
         * @return Directory
         */
        public function getWorkingDirectory() {
            return $this->environment->getWorkingDirectory();
        }

    }

}

