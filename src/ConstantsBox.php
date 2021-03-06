<?php

declare(strict_types=1);

namespace Solventt;

class ConstantsBox
{
    public const CONSONANTS = [
        'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'
    ];

    public const IDENTICAL_FORMS = [
        'sheep', 'swine', 'deer', 'grouse', 'series', 'species', 'corps',
        'bison', 'carp', 'cod', 'neat', 'pike', 'salmon', 'squid', 'trout',
        'moose', 'kakapo', 'aircraft', 'watercraft', 'spacecraft', 'hovercraft', 'chassis'
    ];

    public const UNCOUNTABLE_NOUNS = ['access','accommodation','adulthood','advertising','advice','aggression','aid',
        'air','alcohol', 'anger', 'applause', 'arithmetic','art','assistance','athletics','attention','bacon',
        'baggage','ballet','beauty','beef','beer','biology','blood','botany','bread','business','butter','carbon',
        'cardboard','cash','chalk','chaos','cheese','chess','childhood','clothing','coal','coffee','commerce',
        'compassion','comprehension','content','corruption','cotton','courage','currency','damage','dancing','danger',
        'data','delight', 'dessert','dignity','dirt','distribution','dust','economics','education','electricity',
        'employment','energy','engineering','enjoyment','entertainment','envy','equipment','ethics','evidence',
        'evolution','failure','faith','fame','fiction','flour','flu','food','freedom','fruit','fuel','fun','furniture',
        'garbage','garlic','gas','genetics','glass','gold','golf','gossip','grammar','grass','gratitude','grief',
        'ground','guilt','gymnastics','hair','happiness','hardware','harm','hate','hatred','health','heat','height',
        'help','homework','honesty','honey','hospitality','housework','humour','hunger','hydrogen','ice','importance',
        'inflation','information','injustice','innocence','intelligence','iron','irony','jam','jealousy','jelly','joy',
        'judo','juice','justice','karate','kindness','knowledge','labour','lack','land','laughter','lava','leather',
        'leisure','lightning','linguistics','literature','litter','livestock','logic','loneliness','love','luck',
        'luggage','machinery','magic','mail','management','mankind','marble','mathematics','mayonnaise','measles',
        'meat','metal','methane','milk','money','mud','music','nature','news','nitrogen','nonsense','nurture',
        'nutrition','obedience','obesity','oil','oxygen','paper','passion','pasta','patience','permission','physics',
        'poetry','pollution','poverty', 'power','pride','production','progress','pronunciation','psychology',
        'publicity','punctuation','quality','quantity','quartz','racism','rain','recreation','relaxation',
        'reliability','research','respect','revenge','rice','room','rubbish','rum', 'safety','salad','salt','sand',
        'satire','scenery','seafood','seaside','shame','shopping','silence','sleep', 'smoke','smoking','snow','soap',
        'software','soil','sorrow','soup','speed','spelling','sport','steam', 'strength','stuff','stupidity','success',
        'sugar','sunshine','symmetry','tea','tennis','thirst','thunder', 'timber','time','toast','tolerance','trade',
        'traffic','transportation','travel','trust','understanding', 'underwear','unemployment','unity','usage',
        'validity','veal','vegetation','vegetarianism','vengeance', 'violence','vision','vitality','warmth','water',
        'wealth','weather','weight','welfare','wheat','whiskey', 'width','wildlife','wine','wisdom','wood','wool',
        'work','yeast','yoga','youth','zinc','zoology'
    ];

    public const EXCEPTIONS = [
        'man' => 'men',
        'woman' => 'women',
        'tooth' => 'teeth',
        'foot' => 'feet',
        'goose' => 'geese',
        'mouse' => 'mice',
        'louse' => 'lice',
        'child' => 'children',
        'ox' => 'oxen',
        'dormouse' => 'dormice',
        'person' => 'people',
        'penny' => 'pence',
        'medium' => 'media',
        'datum' => 'data',
        'stratum' => 'strata',
        'spectrum' => 'spectra',
        'ovum' => 'ova',
        'corrigendum' => 'corrigenda',
        'alumnus' => 'alumni',
        'fungus' => 'fungi',
        'genus' => 'genera',
        'radius' => 'radii',
        'succubus' => 'succubi',
        'viscus' => 'viscera'
    ];
}