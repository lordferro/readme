call parent construct or method = parent::__construct();
We need to call parent construct if in class that extends other calss we use construct.

Can you make changes in your class without braking too many things outside of this class?

***incapsulation*** - bundling of data and methods that oparate on that data within one unit - Class. Hide the internal state or information.

***abstraction*** - handle complexity by hiding unnecessary details from the user. (Hiding the implementation).
ex: private static int $count = 0;
if we have it - public - we got a hundred instance of it, and we change int to float, then hundreds of errors came, whit abstraction we change float, and change all method within class in one place.

***final*** class Toaster{} - we can not extends from this class.

***Composition***:
Class Toaster{
   function toast(){
    toast stuff;
   }
}
Class ToasterPro extends Toaster{
    function toastBagesl{}
}
Class ToastOven{
    public function __construct(privare ToasterPro $toaster){}
    function fry(){};
    function toast(){
        $this->toaster->toast();
    }
    function toastBagel(){
        $this->toaster->toastBagel();
    }
}

***abstract class*** can only be extendet, not instantiate.