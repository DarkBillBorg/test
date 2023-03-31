BjNumberValidation
======

Latest Release: [1.3.0](https://packagist.org/packages/odl/bj-number-validation)
License: [MIT](https://packagist.org/packages/odl/bj-number-validation)
 
**Benin phone number validation**

Le package PHP **BjNumberValidation** est un outil conçu pour aider les développeurs à valider les numéros de téléphone originaires du Bénin, un pays situé en Afrique de l'Ouest. Le package utilise diverses techniques de validation pour s'assurer que le numéro de téléphone fourni est exact et correctement formaté.

Avec ce package, les développeurs peuvent facilement intégrer la validation des numéros de téléphone dans leurs applications PHP, en s'assurant que leurs utilisateurs fournissent des numéros de téléphone valides lors de l'inscription ou d'autres interactions.

Dans l'ensemble, le package PHP **BjNumberValidation** fournit une solution fiable et efficace pour valider les numéros de téléphone du Bénin, aidant les développeurs à améliorer la précision et l'intégrité de leurs applications.

----
## Installation facile

### Installer avec composer

Pour installer avec [Composer](https://getcomposer.org/), il vous suffit d'installer la
dernière version de ce package avec composer.

```bash
composer require odl/bj-number-validation
```

### Télécharger et installer

Téléchargez une archive packagée de BjNumberValidation et extrayez-la dans le
répertoire où résidera BjNumberValidation

 * Vous pouvez télécharger des copies stables de BjNumberValidation à partir de
   https://github.com/DarkBillBorg/test/releases


### Installer avec git

À partir de la ligne de commande, basculez vers le répertoire où BjNumberValidation
résident et exécutez les commandes suivantes :

```sh
git clone https://github.com/DarkBillBorg/test.git
cd BjNumberValidation

```

## Usage

**BjNumberValidation renvoie une valeur booléenne (vrai ou faux)**

```php
 $number = 7585415;
 
 $bjNumberValidation = new BjNumberValidation();
 
 $result = $bjNumberValidation->verifyNumber($number);
 
 if($result == true){
    return response("Bon numéro du Benin",200);
 }else {
    return response("Mauvais numero",200);
 }
```

---
*I hope this project will be useful for you.*

