
#
##   05_test_perl_connection.pl   -- 2025-07-29
#
#
###   partially written from:  https://www.a2hosting.com/kb/developer-corner/mysql/connect-to-mysql-using-perl/
use DBI;

my $hostname = 'localhost' ;
my $username = 'testUser'  ;
my $password = 'password'  ;
my $database = 'testDb'    ;

my  $dbh = DBI->connect('DBI:mysql:' . $database . ':' . $hostname, $username, $password)
      or die 'could not connect!';

my $query = $dbh->prepare('SELECT VERSION();') or die 'could not prepare';

$query->execute();

my @resultArray =  $query->fetch()      ;
print $resultArray[0][0] . "\n"         ;

$query->finish();
