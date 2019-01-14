<?php
/**
 * Οι βασικές ρυθμίσεις για to WordPress
 *
 * Το wp-config.php χρησιμοποιείται από την δέσμη ενεργειών κατά την
 * διαδικασία εγκατάστασης. Δεν χρειάζεται να χρησιμοποιήσετε τον ιστότοπο, μπορείτε
 * να αντιγράψετε αυτό το αρχείο ως "wp-config.php" και να συμπληρώσετε τις παραμέτρους.
 *
 * Αυτό το αρχείο περιέχει τις ακόλουθες ρυθμίσεις:
 *
 * * MySQL ρυθμίσεις
 * * Κλειδιά ασφαλείας
 * * Πρόθεμα πινάκων βάσης δεδομένων
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL ρυθμίσεις - Μπορείτε να λάβετε αυτές τις πληροφορίες από τον φιλοξενητή σας ** //
/** Το όνομα της βάσης δεδομένων του WordPress */
define('DB_NAME', 'db_wp');

/** Ψευδώνυμο χρήσης MySQL */
define('DB_USER', 'root');

/** Συνθηματικό βάσης δεδομένων MySQL */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Charset της βάσηςη δεδομένων που θα χρησιμοποιηθεί στην δημιουργία των πινάκων. */
define('DB_CHARSET', 'utf8mb4');

/** Τύπος Collate της βάσης δεδομένων. Μην το αλλάζετε αν έχετε αμφιβολίες. */
define('DB_COLLATE', '');

/**#@+
 * Μοναδικά κλειδιά πιστοποίησηςη και Salts.
 *
 * Αλλάξτε τα σε διαφορετικά μοναδικές φράσεις!
 * Μπορείτε να δημιουργήσετε χρησιμοποιώντας {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Μπορείτε να τα αλλάξετε οποτεδήποτε για να ακυρώσετε τα υπάρχοντα cookies. Θα υποχρεώσει όλους χρήστες να επανασυνδεθούν.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5>6A^S.qY0f>BwT,zOV)AgU#Tx?uFPt],y(#LzD7JXG^^iCCbSxe&RN5^JlGAzCc');
define('SECURE_AUTH_KEY',  '1q-WwC#8mAb+p-TfAZ|EQVrF$N)(e/wp=,MWtD-,>rt)FN27Se`A|5xB,>eyiiF4');
define('LOGGED_IN_KEY',    'P[}Pdf9i[688VjYpcGGb;]aFEFpOn[R>-gf0|<bt{ 2V6R-X@-0bo9+M<NZ9IJFV');
define('NONCE_KEY',        'nG7&[ ]|Q_=H#p^Va9%)oSMP|aT.O;aw:#Sx%X5VbjO833>k$%OCYb`Ne4=P:Sam');
define('AUTH_SALT',        '0yE*;oXibFB>1QrdVHX9>Z[Kc.tDT=j.BD,3b;hSyq,w@2~QNF6Sp0p,2?;m,uGD');
define('SECURE_AUTH_SALT', 's_N>OwdADh,T$FDX_[sPy96yW]ZEwZ}fqwP]GTXZ9=j;VLZiJdb?:[WVs.uuvxNp');
define('LOGGED_IN_SALT',   'B+H5vEL! 8Y7Zefx}VrkTUDC*A>L8xd*`c[4>z@L&boFbU{UItIBQq=a&o-tIdPD');
define('NONCE_SALT',       '>tP7,)&7bKely.ds{|3@Kb}L`,7U6RS({[z}AWtwW54!iB<rcR|*Z:DB]6)iXOqB');

/**#@-*/

/**
 * Πρόθεμα Πίνακα Βάσης Δεδομένων του WordPress.
 *
 * Μπορείτε να έχετε πολλαπλές εγκαταστάσεις σε μια βάση δεδομένων αν δώσετε σε κάθε μία
 * ένα μοναδικό πρόθεμα. Μόνο αριθμοί, γράμματα και κάτω παύλα παρακαλούμε!
 */
$table_prefix  = 'wp_';

/**
 * Για προγραμματιστές: Κατάσταση Απασφαλμάτωσης WordPress (Debugging Mode).
 *
 * Αλλάξτε το σε true για να ενεργοποιήσετε την εμφάνισης ειδοποιήσεων για την διαδικασία ανάπτυξης.
 * Η χρήση WP_DEBUG προτείνεται για τους δημιουργούς προσθέτων και θεμάτων
 * στο περιβάλλον ανάπτυξης τους.
 *
 * Για πληροφορίες για άλλες σταθερές που μπορούν να χρησιμοποιηθούν για απασφαλμάτωση,
 * επισκευθείτε το Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Αυτό είναι όλο, σταματήστε γράφετε! Χαρούμενο blogging. */

/** Η απόλυτη διαδρομή τον κατάλογο του WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ορίζει τις μεταβλητές και τα περιλαμβανόμενα αρχεία WordPress. */
require_once(ABSPATH . 'wp-settings.php');
