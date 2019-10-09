<?php
  abstract class Animal
  {
      abstract protected function makeSound();
          function printSound()
          {
              return $this->makeSound();
          }
  }