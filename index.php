<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>24.10 PHP OOP Practice</title>
    </head>
    <body>
        <?php
            interface MachineInterface {
                public function move($moveDirection);
                public function turn($turnDirection);
                public function startEngine();
            }

            interface RoadVehicleInterface {
                public function bep_bep();
                public function cleanWindow();
            }

            interface SpecialAbilities {
                public function turnTower();
                public function moveBucket();
            }

            abstract class Machine implements MachineInterface {
                abstract public function move($moveDirection);
                abstract public function turn($turnDirection);
                abstract public function startEngine();
            }

            abstract class RoadVehicle implements MachineInterface, RoadVehicleInterface {
                protected $wheels;

                abstract public function move($moveDirection);
                abstract public function turn($turnDirection);
                abstract public function startEngine();
                abstract public function bep_bep();
                abstract public function cleanWindow();
            }

            abstract class SpecialMachine implements MachineInterface, SpecialAbilities {
                protected $caterpillar;

                abstract public function move($moveDirection);
                abstract public function turn($turnDirection);
                abstract public function startEngine();
                public function turnTower() {

                }
                public function moveBucket() {

                }
            }

            class Moto extends Machine {
                protected $engineType = 'gasoline';
                private $seats = 2;
                public function move($moveDirection) {

                }
                public function turn($turnDirection) {

                }
                public function startEngine() {

                }
            }

            class LightVehicle extends RoadVehicle {
                protected $engineType = 'gasoline';
                protected $wheels = 4;
                private $interiorMaterial = 'leather';

                public function move($moveDirection) {

                }
                public function turn($turnDirection) {

                }
                public function startEngine() {

                }
                public function bep_bep() {

                }
                public function cleanWindow() {

                }
            }

            class Buldozer extends SpecialMachine {
                protected $engineType = 'diesel';
                protected $caterpillar = '2m';
                private $color = 'yellow';

                public function move($moveDirection) {

                }
                public function turn($turnDirection) {

                }
                public function startEngine() {

                }
                public function moveBucket() {

                }
            }

            class Tank extends SpecialMachine {
                protected $engineType = 'diesel';
                protected $caterpillar = '4m';
                private $ammunation = 25;

                public function move($moveDirection) {

                }
                public function turn($turnDirection) {

                }
                public function startEngine() {

                }
                public function turnTower() {

                }
            }
        ?>
    </body>
</html>