 <?php                          
$host = 'db'; // Nom du service défini dans docker-compose.yml
$user = 'myuser';
$password = 'monpassword';
$db = 'tutoseu';

try {
    // Créer une nouvelle connexion PDO
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8"; // Définir le DSN (Data Source Name)
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Activer les exceptions pour les erreurs PDO
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération des résultats par défaut
        PDO::ATTR_EMULATE_PREPARES => false, // Désactiver l'émulation des requêtes préparées
    ];

    $pdo = new PDO($dsn, $user, $password, $options);

    echo "Connexion à MySQL avec PDO ok<br />";

    // Exécuter d'autres opérations avec PDO...
    
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Connection failed: " . $e->getMessage());
}
?>

