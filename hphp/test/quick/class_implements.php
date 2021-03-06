<?hh
interface IA {}
interface IB {}

class Base implements IA, IB {}
class Derived extends Base implements IA {}

interface IC {}
class DerivedDerived extends Derived implements IC {}

interface ID extends IA {}
interface IE extends ID {}
interface IG extends IE, IB {}

// IE, ID, IA
class LotsOfInterfaces implements IE {}

// IG, IE, ID, IA, IB
class MostOfTheInterfaces implements IG {}

// literally all of them. literally.
class AllTheInterfaces extends MostOfTheInterfaces implements IC {}
<<__EntryPoint>> function main(): void {
echo "interfaces of Base:\n";
$x = class_implements('Base');
ksort(inout $x);
var_dump($x);
echo "\ninterfaces of Derived:\n";
$x = class_implements('Derived');
ksort(inout $x);
var_dump($x);
echo "\ninterfaces of DerivedDerived:\n";
$x = class_implements('DerivedDerived');
ksort(inout $x);
var_dump($x);
echo "\ninterfaces of LotsOfInterfaces:\n";
$x = class_implements('LotsOfInterfaces');
ksort(inout $x);
var_dump($x);
echo "\ninterfaces of MostOfTheInterfaces:\n";
$x = class_implements('MostOfTheInterfaces');
ksort(inout $x);
var_dump($x);
echo "\ninterfaces of AllTheInterfaces:\n";
$x = class_implements('AllTheInterfaces');
ksort(inout $x);
var_dump($x);
}
