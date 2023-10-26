<?php 
declare(strict_types=1);

namespace Folder\Fedor;

// in other file 
use Folder\Fedor;

var_dump(new Transaction());
// also if we need a global class we need back slash it
var_dump(new \DateTime());

// or this way 

namespace Folder\Fedor;

// in other file 


var_dump(new Folder\Fedor\Transaction());