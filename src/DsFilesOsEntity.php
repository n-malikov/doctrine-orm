<?php
/**
 * @Entity
 * @Table(name="ds_files_os")
 **/
class DsFilesOsEntity {

    /**
     * @Id
     * @Column(type="smallint")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", length=255)
     */
    protected $title;

}