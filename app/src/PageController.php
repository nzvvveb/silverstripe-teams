<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use App\Model\Teams;
    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        }

        /**
         * Find the All Blacks team from the database, and then present whether it’s regional or
         * national, it’s colour, mascot, the season they play, and then a list of the players.
         * 
         * @return ViewableData
         */
        public function getAllBlacksTeam()
        {
            return Teams::get()->filter('Name', 'All Blacks')->First();
        }

        /**
         * Find Jeff Wilson and show the teams he plays in, along with the season that the teams
         * play and if the team is national or regional.
         * 
         * @return ViewableData
         */
        public function getJeffWilsonTeams()
        {
            return Teams::get()->filter(
                [
                    'Players.Firstname'  => 'Jeff',
                    'Players.Lastname'   => 'Wilson',
                ]
            );
        }
    }
}
