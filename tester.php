<?php
    require_once('product_class.php');

    $product1 = new Product('MICHAËL GREGORIO','Spectacles Rodez',43.00,false,0.0);
    $product2 = new Product('DANIEL GUICHARD','Spectacles Rodez',43.00,false,0.2);
    $product3 = new Product('PC Portable Gaming MSI GL75 Leopard 10SFK457FR 17,3" Intel Core i7 16 Go RAM 256 Go SSD + 1 To SATA Noir','Ordinateurs Portables',1999.99,true,0.2);
    $product4 = new Product('PC Portable Gaming Asus TUF505DVHN232T 15.6" AMD Ryzen 7 16 Go RAM 512 Go SSD Noir','Ordinateurs Portables',1499.99,true,0.33);
    $product5 = new Product('PC Portable Gaming Acer Predator Triton 700 PT715-51- 76D4 15.6" Gaming Intel Core i7 32 Go RAM 256 Go SSD + 256 Go SATA Noir','Ordinateurs Portables',0.0,false,0.0);

    $productlist = array ($product1,$product2,$product3,$product4,$product5);

    sortProductCategoryASC($productlist);

    // Functions
    function getPromotedProduct($pl){
        foreach($pl as $product){
            if($product->getPromotion() == true){
                print_r($product->getName() . " est en promotion\n");
            }
        }
    }

    function getDiscountedProduct($pl){
        foreach($pl as $product){
            $prixsansremise = number_format($product->getPrice(),'2', ',', ' ');
            $prixremise = number_format($product->getPrice() - ($product->getPrice() * $product->getDiscount()),'2',',',' ');
            if($product->getDiscount() == true){
                print_r($product->getName() . "\nPrix sans remise: " . $prixsansremise . "€\nPrix avec remise: " . $prixremise . "€\n");
            }
        }       
    }

    function sortProductASC($pl){
        usort($pl, [Product::class, 'sortByName']);
        foreach($pl as $product){
            print_r($product->getName(). "\n");
        }
    }

    function sortProductCategoryASC($pl){
        usort($pl, [Product::class, 'sortByNameCategory']);
        foreach($pl as $product){
            print_r($product->getCategory() . " : " . $product->getName() . "\n");
        }
    }


?>