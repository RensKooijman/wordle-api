<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Words;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            'penis', 'hello', 'apple', 'table', 'knife', 'house', 'mouse', 'plant', 'phone', 'drink', 'happy', 'tiger',
            'zebra', 'chair', 'cloud', 'robot', 'swirl', 'laser', 'frost', 'demon', 'magic', 'grape', 'ocean', 'sword',
            'tulip', 'dream', 'space', 'fairy', 'chess', 'flame', 'music', 'sunny', 'lucky', 'smart', 'piano', 'smile',
            'jolly', 'grace', 'crane', 'beach', 'shell', 'dance', 'party', 'merry', 'globe', 'earth', 'peace', 'amber',
            'flute', 'swift', 'forge', 'pouch', 'jewel', 'grain', 'spark', 'quill', 'glove', 'stork', 'mirth', 'hymns',
            'whale', 'crown', 'oasis', 'haste', 'lunar', 'royal', 'lyric', 'blend', 'sweep', 'vegan', 'fresh', 'flint',
            'juice', 'smirk', 'shiny', 'bloom', 'pluck', 'shine', 'sweet', 'giant', 'chirp', 'creek', 'hoard', 'tower', 
            'noble', 'wisps', 'swoop', 'darts', 'vivid', 'pride', 'sworn', 'swarm', 'shrub', 'drift', 'prize', 'spire', 
            'arise', 'river', 'wrist', 'crisp', 'drown', 'juicy', 'charm', 'rover', 'shrub', 'quark', 'vexed', 'jazzy', 
            'crypt', 'pyxes', 'mizen', 'brisk', 'plush', 'fjord', 'zappy', 'glyph', 'khaki', 'knurl', 'wrung', 'zilch', 
            'joust', 'gauzy', 'fable', 'quiff', 'blini', 'quash', 'buxom', 'pyxie', 'cymol', 'blitz', 'vixen', 'cozyx', 
            'pique', 'whizg', 'quell', 'scamp', 'waltz', 'quart', 'flair', 'gleam', 'jaunt', 'latch', 'moose', 'nudge', 
            'overt', 'quake', 'rampy', 'saute', 'theme', 'usurp', 'wharf', 'xenon', 'yield', 'zesty', 'query', 'token', 
            'unity', 'whisk', 'xerox', 'quirk', 'quell', 'frown', 'bevel', 'lurch', 'cleft', 'douse', 'foamy', 'girth', 
            'havoc', 'infix', 'knead', 'loamy', 'moxie', 'novel', 'perky', 'ravel', 'tonic', 'unzip', 'whisk', 'yield'
        ];

        foreach($words as $word){
            Words::create([
                'words'  =>  "$word",
            ]);
        }
    }
}
