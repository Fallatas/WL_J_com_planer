<?php


defined('_JEXEC') or die;

use Joomla\Utilities\ArrayHelper;

/**
 * Methods supporting a list of user records.
 *
 * @since  1.6
 */
class PlanerModelStatistiken extends JModelList
{
	/**
	 * Build an SQL query to load the list data.
	 *
	 * @return  JDatabaseQuery
	 *
	 * @since   1.6
	 */
	protected function getListQuery()
	{
		// Create a new query object.
		$db    = $this->getDbo();
		$query = $db->getQuery(true);

		// Select the required fields from the table.
		$query->select('*')
            ->from('#__users');

		return $query;
	}

    public function addUser()
    {
        $input = JFactory::getApplication()->input;
        $username = $input->get('username');

        // Get a db connection.
        $db = JFactory::getDbo();

        // Create a new query object.
        $query = $db->getQuery(true);

        // Insert columns.
        $columns = array('username');

        // Insert values.
        $values = array($db->q($username));

        // Prepare the insert query.
        $query
            ->insert($db->quoteName('#__users'))
            ->columns($db->quoteName($columns))
            ->values(implode(',', $values));

        // Set the query using our newly populated query object and execute it.
        $db->setQuery($query);
        $db->execute();
    }

    public function getStatistics()
    {

        JFactory::getDocument()->addScriptDeclaration("jQuery(document).ready(function () {  
        
                var ctx = document.getElementById('myChart').getContext('2d');

                var myKundenObject = {
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
                    datasets: [{
                        label: 'Kundenzuwachs dieses Jahr (2020)',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [0, 10, 5, 2, 20, 30, 45]
                    }]
                    },
                    options: {}
                    };

                    var chart = new Chart(ctx,myKundenObject);
                
            });");
    }

    public function getMap()
    {

        JFactory::getDocument()->addScriptDeclaration("jQuery(document).ready(function () {  
         const mymap = L.map('Map').setView([51.505, -0.09], 10);

        const attribution = '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors';
        const titleUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

        const tiles = L.tileLayer(titleUrl,{attribution});
        tiles.addTo(mymap);


        const api_url = 'https://api.wheretheiss.at/v1/satellites/25544';
        async function getFirma(){
            const response = await fetch(api_url);
            const data = await response.json();
            const {latitude, longitude, sdfsdf} = data;

            L.marker([latitude, longitude]).addTo(mymap);

        }

        getFirma();

        setInterval(getISS,5000);
            });");

    }

}
