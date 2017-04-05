use strict;
use warnings;
use Text::Hyphen; 
 
my $hyphenator = new Text::Hyphen; 
my $phrase =0;
my $mots = 0;
my $moy =0;
open(OH,">two.txt") or die "Could not write file two.txt";
open(FH,"test.xml") or die  "Could not open file one.txt";

while(<FH>){


if (($_ =~ /<.*/)||($_ =~ /\,.*PUN/)||($_ =~ /\..*SENT/) ) {
if ($_ =~ /\..*SENT/)  {
$phrase++;
}

}else{
print"Data=> $_\n";
$mots++;
print OH "$_\n";
}
}
print"nomre de phrase $phrase\n";
print "nombre des mots$mots\n";
$moy = $mots/$phrase;
print "moyenne des mots par phrase $moy\n";
close OH;
close FH;



 
print $hyphenator->hyphenate('representation'); 
# prints rep-re-sen-ta-tion


