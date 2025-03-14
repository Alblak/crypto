<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Recherche sur les méthodes cryptanalytiques</title>
  <?php include_once('../include_admin/lien.php'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include_once('../include_admin/aside.php'); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include_once('../include_admin/nav.php'); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>

          <div class="row">
            <div class="col-xl-12 mt-3">
              <div class="shadow p-3">
                <h1 class="text-center">Recherche sur les méthodes cryptanalytiques des algorithmes de chiffrement classiques</h1>
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <h2>1. Chiffrement Affine</h2>
                    <p>Le chiffrement Affine est un algorithme de chiffrement par substitution qui utilise une fonction mathématique affine pour chiffrer chaque lettre du message. La fonction de chiffrement est définie par :</p>
                    <p>\[ E(x) = (a \cdot x + b) \mod 26 \]</p>
                    <p>où \( x \) est la lettre en clair, \( a \) et \( b \) sont les clés de chiffrement, et \( a \) doit être premier avec 26.</p>
                    <h3>Méthodes cryptanalytiques :</h3>
                    <ul>
                      <li><strong>Analyse fréquentielle</strong> : Comme pour le chiffrement de César, l'analyse fréquentielle peut être utilisée pour identifier les lettres les plus fréquentes dans le texte chiffré et les comparer avec les fréquences des lettres dans la langue du texte clair (Stinson, 2005).</li>
                      <li><strong>Attaque par force brute</strong> : Étant donné que \( a \) doit être premier avec 26, il n'y a que 12 valeurs possibles pour \( a \) (1, 3, 5, 7, 9, 11, 15, 17, 19, 21, 23, 25). Une attaque par force brute peut essayer toutes les combinaisons possibles de \( a \) et \( b \) (Stinson, 2005).</li>
                      <li><strong>Résolution d'équations linéaires</strong> : Si une partie du texte clair est connue (attaque à texte clair connu), il est possible de résoudre un système d'équations linéaires pour retrouver \( a \) et \( b \) (Stinson, 2005).</li>
                    </ul>

                    <h2>2. Chiffrement de Vigenère</h2>
                    <p>Le chiffrement de Vigenère est une méthode de chiffrement polyalphabétique qui utilise une clé répétée pour chiffrer le message. Il est plus robuste que le chiffrement de César car il utilise plusieurs décalages.</p>
                    <h3>Méthodes cryptanalytiques :</h3>
                    <ul>
                      <li><strong>Méthode de Kasiski</strong> : Cette méthode permet de déterminer la longueur de la clé en recherchant des répétitions dans le texte chiffré. Une fois la longueur de la clé déterminée, l'analyse fréquentielle peut être appliquée sur chaque sous-chaîne pour retrouver la clé (Kahn, 1996).</li>
                      <li><strong>Analyse de l'indice de coïncidence</strong> : L'indice de coïncidence permet de mesurer la probabilité que deux lettres choisies au hasard dans le texte chiffré soient identiques. Cette méthode aide à estimer la longueur de la clé (Kahn, 1996).</li>
                      <li><strong>Attaque par force brute</strong> : Si la longueur de la clé est courte, une attaque par force brute peut être utilisée pour essayer toutes les combinaisons possibles de la clé (Kahn, 1996).</li>
                    </ul>

                    <h2>3. Chiffrement de Hill</h2>
                    <p>Le chiffrement de Hill est un algorithme de chiffrement par blocs qui utilise l'algèbre linéaire pour chiffrer des groupes de lettres. Il repose sur une matrice de chiffrement carrée.</p>
                    <h3>Méthodes cryptanalytiques :</h3>
                    <ul>
                      <li><strong>Attaque à texte clair connu</strong> : Si une partie du texte clair et du texte chiffré est connue, il est possible de résoudre un système d'équations linéaires pour retrouver la matrice de chiffrement (Bauer, 2002).</li>
                      <li><strong>Attaque par force brute</strong> : Pour de petites tailles de matrice, une attaque par force brute peut être utilisée pour essayer toutes les matrices possibles (Bauer, 2002).</li>
                      <li><strong>Analyse des propriétés mathématiques</strong> : La matrice de chiffrement doit être inversible modulo 26. Une analyse des propriétés mathématiques de la matrice peut aider à réduire l'espace des clés possibles (Bauer, 2002).</li>
                    </ul>

                    <h2>4. Chiffrement Rail Fence</h2>
                    <p>Le chiffrement Rail Fence est une méthode de transposition qui réorganise les lettres du message en les écrivant sur plusieurs "rails" (lignes) avant de les lire en colonnes.</p>
                    <h3>Méthodes cryptanalytiques :</h3>
                    <ul>
                      <li><strong>Essai de différentes hauteurs de rails</strong> : La cryptanalyse repose sur l'essai de différentes hauteurs de rails pour retrouver le message clair. Une fois la hauteur correcte trouvée, le message peut être reconstruit (Singh, 1999).</li>
                      <li><strong>Analyse des motifs</strong> : Si une partie du texte clair est connue, il est possible de déduire la hauteur des rails en analysant les motifs de transposition (Singh, 1999).</li>
                      <li><strong>Attaque par force brute</strong> : Pour des messages courts, une attaque par force brute peut être utilisée pour essayer toutes les hauteurs de rails possibles (Singh, 1999).</li>
                    </ul>

                    <h2>Références</h2>
                    <ol>
                      <li>Stinson, D. R. (2005). <em>Cryptography: Theory and Practice</em> (3rd ed.). Chapman & Hall/CRC.</li>
                      <li>Kahn, D. (1996). <em>The Codebreakers: The Comprehensive History of Secret Communication from Ancient Times to the Internet</em>. Scribner.</li>
                      <li>Bauer, F. L. (2002). <em>Decrypted Secrets: Methods and Maxims of Cryptology</em> (4th ed.). Springer.</li>
                      <li>Singh, S. (1999). <em>The Code Book: The Science of Secrecy from Ancient Egypt to Quantum Cryptography</em>. Anchor Books.</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include_once('../include_admin/script.php'); ?>
</body>

</html>