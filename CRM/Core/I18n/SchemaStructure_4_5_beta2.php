<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from schema_structure.tpl
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
class CRM_Core_I18n_SchemaStructure_4_5_beta2 {

  /**
   * Get column definition.
   */
  public static function &columns() {
    static $result = NULL;
    if (!$result) {
      $result = array(
        'civicrm_location_type' => array(
          'display_name' => "varchar(64)",
        ),
        'civicrm_option_group' => array(
          'title' => "varchar(255)",
          'description' => "varchar(255)",
        ),
        'civicrm_contact_type' => array(
          'label' => "varchar(64)",
          'description' => "text",
        ),
        'civicrm_batch' => array(
          'title' => "varchar(64)",
          'description' => "text",
        ),
        'civicrm_premiums' => array(
          'premiums_intro_title' => "varchar(255)",
          'premiums_intro_text' => "text",
          'premiums_nothankyou_label' => "varchar(255)",
        ),
        'civicrm_membership_status' => array(
          'label' => "varchar(128)",
        ),
        'civicrm_survey' => array(
          'title' => "varchar(255)",
          'instructions' => "text",
          'thankyou_title' => "varchar(255)",
          'thankyou_text' => "text",
        ),
        'civicrm_participant_status_type' => array(
          'label' => "varchar(255)",
        ),
        'civicrm_case_type' => array(
          'title' => "varchar(64)",
          'description' => "varchar(255)",
        ),
        'civicrm_tell_friend' => array(
          'title' => "varchar(255)",
          'intro' => "text",
          'suggested_message' => "text",
          'thankyou_title' => "varchar(255)",
          'thankyou_text' => "text",
        ),
        'civicrm_custom_group' => array(
          'title' => "varchar(64)",
          'help_pre' => "text",
          'help_post' => "text",
        ),
        'civicrm_custom_field' => array(
          'label' => "varchar(255)",
          'help_pre' => "text",
          'help_post' => "text",
        ),
        'civicrm_option_value' => array(
          'label' => "varchar(255)",
          'description' => "text",
        ),
        'civicrm_group' => array(
          'title' => "varchar(64)",
        ),
        'civicrm_contribution_page' => array(
          'title' => "varchar(255)",
          'intro_text' => "text",
          'pay_later_text' => "text",
          'pay_later_receipt' => "text",
          'initial_amount_label' => "varchar(255)",
          'initial_amount_help_text' => "text",
          'thankyou_title' => "varchar(255)",
          'thankyou_text' => "text",
          'thankyou_footer' => "text",
          'for_organization' => "text",
          'receipt_from_name' => "varchar(255)",
          'receipt_text' => "text",
          'footer_text' => "text",
        ),
        'civicrm_product' => array(
          'name' => "varchar(255)",
          'description' => "text",
          'options' => "text",
        ),
        'civicrm_membership_type' => array(
          'name' => "varchar(128)",
          'description' => "varchar(255)",
        ),
        'civicrm_membership_block' => array(
          'new_title' => "varchar(255)",
          'new_text' => "text",
          'renewal_title' => "varchar(255)",
          'renewal_text' => "text",
        ),
        'civicrm_price_set' => array(
          'title' => "varchar(255)",
          'help_pre' => "text",
          'help_post' => "text",
        ),
        'civicrm_dashboard' => array(
          'label' => "varchar(255)",
        ),
        'civicrm_uf_group' => array(
          'title' => "varchar(64)",
          'help_pre' => "text",
          'help_post' => "text",
        ),
        'civicrm_uf_field' => array(
          'help_post' => "text",
          'help_pre' => "text",
          'label' => "varchar(255)",
        ),
        'civicrm_price_field' => array(
          'label' => "varchar(255)",
          'help_pre' => "text",
          'help_post' => "text",
        ),
        'civicrm_price_field_value' => array(
          'label' => "varchar(255)",
          'description' => "text",
        ),
        'civicrm_pcp_block' => array(
          'link_text' => "varchar(255)",
        ),
        'civicrm_event' => array(
          'title' => "varchar(255)",
          'summary' => "text",
          'description' => "text",
          'registration_link_text' => "varchar(255)",
          'event_full_text' => "text",
          'fee_label' => "varchar(255)",
          'intro_text' => "text",
          'footer_text' => "text",
          'confirm_title' => "varchar(255)",
          'confirm_text' => "text",
          'confirm_footer_text' => "text",
          'confirm_email_text' => "text",
          'confirm_from_name' => "varchar(255)",
          'thankyou_title' => "varchar(255)",
          'thankyou_text' => "text",
          'thankyou_footer_text' => "text",
          'pay_later_text' => "text",
          'pay_later_receipt' => "text",
          'initial_amount_label' => "varchar(255)",
          'initial_amount_help_text' => "text",
          'waitlist_text' => "text",
          'approval_req_text' => "text",
          'template_title' => "varchar(255)",
        ),
      );
    }
    return $result;
  }

  /**
   * Get indices.
   *
   * @return array
   */
  public static function &indices() {
    static $result = NULL;
    if (!$result) {
      $result = array(
        'civicrm_custom_group' => array(
          'UI_title_extends' => array(
            'name' => 'UI_title_extends',
            'field' => array(
              'title',
              'extends',
            ),
            'unique' => 1,
          ),
        ),
        'civicrm_custom_field' => array(
          'UI_label_custom_group_id' => array(
            'name' => 'UI_label_custom_group_id',
            'field' => array(
              'label',
              'custom_group_id',
            ),
            'unique' => 1,
          ),
        ),
        'civicrm_group' => array(
          'UI_title' => array(
            'name' => 'UI_title',
            'field' => array(
              'title',
            ),
            'unique' => 1,
          ),
        ),
      );
    }
    return $result;
  }

  /**
   * Get tables.
   *
   * @return array
   */
  public static function &tables() {
    static $result = NULL;
    if (!$result) {
      $result = array_keys(self::columns());
    }
    return $result;
  }

}
