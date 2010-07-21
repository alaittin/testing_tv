<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Noodle, 2009-2010
 * @author     Erwan Ripoll <eripoll@noodle.fr>
 * @package    Framework
 * @license    LGPL
 * @filesource
 */


/**
 * Class Cmodel
 *
 * Enhence the EModel class
 * @copyright  EModel - Olivier El Mekki 2009-2010
 * @author     EModel - Olivier El Mekki 
 * @package    Framework
 *
 */
class Cmodel extends Emodel
{


  /*
   * Remove a related - manyToMany relationship
   * @param string
   * @param mixed
   * @return boolean
   * TODO : set the got many flag
   */
  public function removeManyToMany( $associated, $id )
  {
    if ( array_key_exists( $associated, $this->manyToMany ) )
    {
      $table = $this->manyToMany[ $associated ];
      $hereField  = strtolower( get_class( $this ) ) . '_id';
      $thereField = strtolower( $associated ) . '_id';

       $record = $this->Database->prepare( sprintf( "select * from `%s` where `%s` = ? and `%s` = ?", $table, $hereField, $thereField ) )
                               ->execute( $this->id, $id );

      if ( $record->next() and is_numeric( $id ) )
      {
        $this->Database->prepare( sprintf( "delete from `%s` where  `%s` = ? and `%s` = ?", $table, $hereField, $thereField ) )
                       ->execute( $this->id, $id );

        return true;
      }
    }

    return false;
  }




}
?>