<?php

namespace DownloadManager\Entity;

use DateTime;
use Omeka\Entity\AbstractEntity;

/**
 * Downloads Logs are simple data, without any relation with other tables, so if
 * a user or an item is removed, the value is not set null.
 *
 * Furthermore, there is no constraint user/resource, because a user may have
 * downloaded an item multiple times. In the same way, the created date time is
 * a simple copy of the original creation date.
 *
 * @Entity
 * @Table(
 *      indexes={
 *          @Index(columns={"resource_id"}),
 *          @Index(columns={"owner_id"}),
 *          @Index(columns={"expire"})
 *      }
 * )
 */
class DownloadLog extends AbstractEntity
{
    /**
     * Note: This is not a generated value, but the original Download id.
     * @Id
     * @Column(type="integer", unique=true)
     */
    protected $id;

    /**
     * Note: This is not an enum. Furthermore, only downloaded files will be
     * saved in this log.
     * @Column(type="string", length=190)
     */
    protected $status;

    /**
     * @Column(type="integer")
     */
    protected $resource_id;

    /**
     * @Column(type="integer")
     */
    protected $owner_id;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $expire;

    /**
     * @Column(type="json_array", nullable=true)
     */
    protected $log;

    /**
     * @Column(type="string", length=64, nullable=true)
     */
    protected $hash;

    /**
     * @Column(type="string", length=64, nullable=true)
     */
    protected $hashPassword;

    /**
     * @Column(type="string", length=64, nullable=true)
     */
    protected $salt;

    /**
     * @Column(type="datetime")
     */
    protected $created;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $modified;

    /**
     * This method is required, because the id is not autogenerated.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setResourceIdentifier($resourceId)
    {
        $this->resource_id = $resourceId;
    }

    /**
     * Get the resource id.
     *
     * The method name "getResourceId()" may be used by Zend, in particular with
     * Acl.
     *
     * @return int
     */
    public function getResourceIdentifier()
    {
        return $this->resource_id;
    }

    public function setOwnerId($ownerId)
    {
        $this->owner_id = $ownerId;
    }

    public function getOwnerId()
    {
        return $this->owner_id;
    }

    public function setExpire(DateTime $dateTime = null)
    {
        $this->expire = $dateTime;
    }

    public function getExpire()
    {
        return $this->expire;
    }

    public function setLog(array $log = null)
    {
        $this->log = $log;
    }

    public function getLog()
    {
        return $this->log;
    }

    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHashPassword($hashPassword)
    {
        $this->hashPassword = $hashPassword;
    }

    public function getHashPassword()
    {
        return $this->hashPassword;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setCreated(DateTime $dateTime)
    {
        $this->created = $dateTime;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setModified(DateTime $dateTime = null)
    {
        $this->modified = $dateTime;
    }

    public function getModified()
    {
        return $this->modified;
    }
}
