<?php


/* Australian Prime Ministers.  Data as of 5 March 2010. */

  function getPms(){
    $pms = array(
        array('index' => '1', 'name' => 'Edmund Barton', 'from' => '1 January 1901', 'to' => '24 September 1903', 'party' => 'Protectionist', 'duration' => '2 years, 8 months, 24 days', 'state' => 'New South Wales'),
        array('index' => '2', 'name' => 'Alfred Deakin', 'from' => '24 September 1903', 'to' => '27 April 1904', 'party' => 'Protectionist', 'duration' => '0 years, 7 months, 4 days', 'state' => 'Victoria'),
        array('index' => '3', 'name' => 'Chris Watson', 'from' => '27 April 1904', 'to' => '18 August 1904', 'party' => 'Labour', 'duration' => '0 years, 3 months, 21 days', 'state' => 'New South Wales'),
        array('index' => '4', 'name' => 'George Reid', 'from' => '18 August 1904', 'to' => '5 July 1905', 'party' => 'Free Trade', 'duration' => '0 years, 10 months, 18 days', 'state' => 'New South Wales'),
        array('index' => '-', 'name' => 'Alfred Deakin', 'from' => '5 July 1905', 'to' => '13 November 1908', 'party' => 'Protectionist', 'duration' => '3 years, 4 months, 9 days', 'state' => 'Victoria'),
        array('index' => '5', 'name' => 'Andrew Fisher', 'from' => '13 November 1908', 'to' => '2 June 1909', 'party' => 'Labour', 'duration' => '0 years, 6 months, 21 days', 'state' => 'Queensland'),
        array('index' => '-', 'name' => 'Alfred Deakin', 'from' => '2 June 1909', 'to' => '29 April 1910', 'party' => 'Commonwealth Liberal', 'duration' => '0 years, 10 months, 28 days', 'state' => 'Victoria'),
        array('index' => '-', 'name' => 'Andrew Fisher', 'from' => '29 April 1910', 'to' => '24 June 1913', 'party' => 'Labor', 'duration' => '3 years, 1 month, 26 days', 'state' => 'Queensland'),
        array('index' => '6', 'name' => 'Joseph Cook', 'from' => '24 June 1913', 'to' => '17 September 1914', 'party' => 'Commonwealth Liberal', 'duration' => '1 year, 2 months, 25 days', 'state' => 'New South Wales'),
        array('index' => '-', 'name' => 'Andrew Fisher', 'from' => '17 September 1914', 'to' => '27 October 1915', 'party' => 'Labor', 'duration' => '1 year, 1 month, 11 days', 'state' => 'Queensland'),
        array('index' => '7', 'name' => 'Billy Hughes', 'from' => '27 October 1915', 'to' => '9 February 1923', 'party' => 'Labor/Nationalist', 'duration' => '7 years, 3 months, 14 days', 'state' => 'New South Wales, Victoria'),
        array('index' => '8', 'name' => 'Stanley Bruce', 'from' => '9 February 1923', 'to' => '22 October 1929', 'party' => 'Nationalist', 'duration' => '6 years, 8 months, 14 days', 'state' => 'Victoria'),
        array('index' => '9', 'name' => 'James Scullin', 'from' => '22 October 1929', 'to' => '6 January 1932', 'party' => 'Labor', 'duration' => '2 years, 2 months, 16 days', 'state' => 'Victoria'),
        array('index' => '10', 'name' => 'Joseph Lyons', 'from' => '6 January 1932', 'to' => '7 April 1939', 'party' => 'United Australia', 'duration' => '7 years, 3 months, 2 days', 'state' => 'Tasmania'),
        array('index' => '11', 'name' => 'Earle Page', 'from' => '7 April 1939', 'to' => '26 April 1939', 'party' => 'Country', 'duration' => '0 years, 0 months, 20 days', 'state' => 'New South Wales'),
        array('index' => '12', 'name' => 'Robert Menzies', 'from' => '26 April 1939', 'to' => '28 August 1941', 'party' => 'United Australia', 'duration' => '2 years, 4 months, 4 days', 'state' => 'Victoria'),
        array('index' => '13', 'name' => 'Arthur Fadden', 'from' => '28 August 1941', 'to' => '7 October 1941', 'party' => 'Country', 'duration' => '0 years, 1 month, 9 days', 'state' => 'Queensland'),
        array('index' => '14', 'name' => 'John Curtin', 'from' => '7 October 1941', 'to' => '5 July 1945', 'party' => 'Labor', 'duration' => '3 years, 8 months, 29 days', 'state' => 'Western Australia'),
        array('index' => '15', 'name' => 'Frank Forde', 'from' => '6 July 1945', 'to' => '13 July 1945', 'party' => 'Labor', 'duration' => '0 years, 0 months, 8 days', 'state' => 'Queensland'),
        array('index' => '16', 'name' => 'Ben Chifley', 'from' => '13 July 1945', 'to' => '19 December 1949', 'party' => 'Labor', 'duration' => '4 years, 5 months, 7 days', 'state' => 'New South Wales'),
        array('index' => '-', 'name' => 'Robert Menzies', 'from' => '19 December 1949', 'to' => '26 January 1966', 'party' => 'Liberal', 'duration' => '16 years, 1 month, 8 days', 'state' => 'Victoria'),
        array('index' => '17', 'name' => 'Harold Holt', 'from' => '26 January 1966', 'to' => '19 December 1967[5]', 'party' => 'Liberal', 'duration' => '1 year, 10 months, 23 days', 'state' => 'Victoria'),
        array('index' => '18', 'name' => 'John McEwen', 'from' => '19 December 1967', 'to' => '10 January 1968', 'party' => 'Country', 'duration' => '0 years, 0 months, 23 days', 'state' => 'Victoria'),
        array('index' => '19', 'name' => 'John Gorton', 'from' => '10 January 1968', 'to' => '10 March 1971', 'party' => 'Liberal', 'duration' => '3 years, 2 months, 0 days', 'state' => 'Victoria'),
        array('index' => '20', 'name' => 'William McMahon', 'from' => '10 March 1971', 'to' => '5 December 1972', 'party' => 'Liberal', 'duration' => '1 year, 8 months, 25 days', 'state' => 'New South Wales'),
        array('index' => '21', 'name' => 'Gough Whitlam', 'from' => '5 December 1972', 'to' => '11 November 1975', 'party' => 'Labor', 'duration' => '2 years, 11 months, 7 days', 'state' => 'New South Wales'),
        array('index' => '22', 'name' => 'Malcolm Fraser', 'from' => '11 November 1975', 'to' => '11 March 1983', 'party' => 'Liberal', 'duration' => '7 years, 4 months, 0 days', 'state' => 'Victoria'),
        array('index' => '23', 'name' => 'Bob Hawke', 'from' => '11 March 1983', 'to' => '20 December 1991', 'party' => 'Labor', 'duration' => '8 years, 9 months, 10 days', 'state' => 'Victoria'),
        array('index' => '24', 'name' => 'Paul Keating', 'from' => '20 December 1991', 'to' => '11 March 1996', 'party' => 'Labor', 'duration' => '4 years, 2 months, 20 days', 'state' => 'New South Wales'),
        array('index' => '25', 'name' => 'John Howard', 'from' => '11 March 1996', 'to' => '3 December 2007', 'party' => 'Liberal', 'duration' => '11 years, 8 months, 23 days', 'state' => 'New South Wales'),
        array('index' => '26', 'name' => 'Kevin Rudd', 'from' => '3 December 2007', 'to' => '24 June 2010', 'party' => 'Labor', 'duration' => '2 years, 6 months, 21 days', 'state' => ' Queensland'),
        array('index' => '27', 'name' => 'Julia Gillard', 'from' => '24 June 2010', 'to' => 'Incumbent', 'party' => 'Labor', 'duration' => '2 years, 8 months, 6 days', 'state' => ' Victoria')
    );
    return $pms;
  }
?>

