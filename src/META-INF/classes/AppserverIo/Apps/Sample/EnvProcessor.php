<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Hans Höchtl <hhoechtl@1drop.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace AppserverIo\Apps\Sample;


use AppserverIo\Psr\Application\ApplicationInterface;

/**
 * Class EnvProcessor
 *
 * @package AppserverIo\Apps\Sample
 * @Stateless
 */
class EnvProcessor
{


    /**
     * The application instance that provides the entity manager.
     *
     * @var \AppserverIo\Appserver\Application\Application
     * @Resource(name="ApplicationInterface")
     */
    protected $application;

    /**
     * Injects the application into all extending instances.
     *
     * ATTENTION: Will only be used if you activate it in the epb.xml file!
     *
     * @param \AppserverIo\Psr\Application\ApplicationInterface $application The application instance
     *
     * @return void
     */
    public function injectApplication(ApplicationInterface $application)
    {
        $this->application = $application;
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->application->getEnvironmentName();
    }
}
