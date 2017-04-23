
// products, users
class User {
    protected $id, $name, $email, $password;
    protected $products = [];

    public function __construct($id, $name, $email, $password){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function placeOrders(Product ...$products){
        foreach ($products as $product){
            $this->products[] = $product;
            $product->placed();
        }
    }

    public function getOrders(){
        return $this->products;
    }
}

class Product {
    protected $id, $title, $description, $price, $quantity;

    public function __construct($id, $title, $description, $price, $quantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function placed(){
        $this->quantity--;
    }
}
// products
$iPad = new Product(1, "iPad", "iPad", 200, 4);
$iMac = new Product(2, "iMac", "iMac", 400, 2);

// users
$saleem = new User(1, "saleem", "email@g.com", "password");

$saleem->placeOrders($iPad);

var_dump($saleem->getOrders());