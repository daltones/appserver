<?php

/**
 * \AppserverIo\Appserver\Core\Api\Node\DatasourceNode
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Appserver\Core\Api\Node;

use AppserverIo\Description\Api\Node\AbstractNode;

/**
 * DTO to transfer a datasource.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */
class DatasourceNode extends AbstractNode implements DatasourceNodeInterface
{

    /**
     * The unique datasource name.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $name;

    /**
     * The type of the datasource.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $type;

    /**
     * The database connection information.
     *
     * @var \AppserverIo\Appserver\Core\Api\Node\DatabaseNode
     * @AS\Mapping(nodeName="database", nodeType="AppserverIo\Appserver\Core\Api\Node\DatabaseNode")
     */
    protected $database;

    /**
     * The container which can use this datasource
     *
     * @var string
     * @AS\Mapping(nodeName="container", nodeType="string")
     */
    protected $containerName;

    /**
     * Return's the unique datasource name.
     *
     * @return string|null The unique datasource name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Return's the datasource's type.
     *
     * @return string|null The datasource type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Return's the database connection information.
     *
     * @return \AppserverIo\Appserver\Core\Api\Node\DatabaseNode The database connection information
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set's the name of the container which can use this datasource.
     *
     * @param string|null $containerName The name of the container
     *
     * @return void
     */
    public function setContainerName($containerName)
    {
        $this->containerName = $containerName;
    }
    /**
     * Return's the name of the container which can use this datasource
     *
     * @return string The name of the container
     */
    public function getContainerName()
    {
        return $this->containerName;
    }
}
