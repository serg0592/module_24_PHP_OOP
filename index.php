<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>24.10 PHP OOP Practice</title>
    </head>
    <body>
        <?php
            //общий интерфейс
            interface MachineInterface {
                public function move($moveDirection); //вперед-назад
                public function turn($turnDirection); //налево-направо
                public function startEngine(); //пуск двигателя
            }
            //интерфейс дорожных автомобилей
            interface RoadVehicleInterface {
                public function bep_bep(); //сигнал
                public function cleanWindow(); //дворники
            }
            //интерфейс спецтехники
            interface SpecialAbilities {
                public function turnTower(); //поворот башни
                public function moveBucket(); //движение ковшом
            }
            //общий класс машин
            abstract class Machine implements MachineInterface {
                protected $engineType; //тип двигателя
                abstract public function move($moveDirection);
                abstract public function turn($turnDirection);
                abstract public function startEngine();
            }
            //класс дорожных автомобилей
            abstract class RoadVehicle implements MachineInterface, RoadVehicleInterface {
                protected $engineType;
                protected $wheels; //кол-во колес

                abstract public function move($moveDirection);
                abstract public function turn($turnDirection);
                abstract public function startEngine();
                abstract public function bep_bep();
                abstract public function cleanWindow();
            }
            //класс спецтехники
            abstract class SpecialMachine implements MachineInterface, SpecialAbilities {
                protected $engineType;
                protected $caterpillar; //длина гусениц

                abstract public function move($moveDirection);
                abstract public function turn($turnDirection);
                abstract public function startEngine();
                public function turnTower() {

                }
                public function moveBucket() {

                }
            }
            //мотоцикл
            class Moto extends Machine {
                protected $engineType = 'gasoline';
                private $seats = 2; //кол-во мест
                public function move($moveDirection) {

                }
                public function turn($turnDirection) {

                }
                public function startEngine() {

                }
            }
            //легковое авто
            class LightVehicle extends RoadVehicle {
                protected $engineType = 'gasoline';
                protected $wheels = 4;
                private $interiorMaterial = 'leather'; //отделка салона

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
            //бульдозер
            class Buldozer extends SpecialMachine {
                protected $engineType = 'diesel';
                protected $caterpillar = '2m';
                private $color = 'yellow'; //цвет

                public function move($moveDirection) {

                }
                public function turn($turnDirection) {

                }
                public function startEngine() {

                }
                public function moveBucket() {

                }
            }
            //танк
            class Tank extends SpecialMachine {
                protected $engineType = 'diesel';
                protected $caterpillar = '4m';
                private $ammunation = 25; //боезапас

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