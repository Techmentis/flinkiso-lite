<?php
App::uses('ListOfMeasuringDevicesForCalibration', 'Model');

/**
 * ListOfMeasuringDevicesForCalibration Test Case
 *
 */
class ListOfMeasuringDevicesForCalibrationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.list_of_measuring_devices_for_calibration',
		'app.device',
		'app.supplier_registration',
		'app.system_table',
		'app.master_list_of_format',
		'app.branch',
		'app.department',
		'app.courier_register',
		'app.user',
		'app.employee',
		'app.designation',
		'app.customer_complaint',
		'app.customer',
		'app.delivery_challan',
		'app.purchase_order',
		'app.delivery_challan_detail',
		'app.purchase_order_detail',
		'app.product',
		'app.order_details_form',
		'app.supplier_evaluation_reevaluation',
		'app.list_of_computer',
		'app.daily_backup_detail',
		'app.data_back_up',
		'app.data_type',
		'app.schedule',
		'app.housekeeping_responsibility',
		'app.housekeeping_checklist',
		'app.housekeeping',
		'app.list_of_software',
		'app.software_type',
		'app.training_need_identification',
		'app.training',
		'app.course',
		'app.course_type',
		'app.trainer',
		'app.trainer_type',
		'app.training_type',
		'app.list_of_trained_internal_auditor',
		'app.internal_audit_plan_department',
		'app.internal_audit_plan',
		'app.internal_audit_plan_branch',
		'app.internal_audit',
		'app.corrective_preventive_action',
		'app.capa_source',
		'app.capa_category',
		'app.internal_audit_detail',
		'app.timeline',
		'app.meeting',
		'app.document_amendment_record_sheet',
		'app.suggesion_form',
		'app.meeting_branch',
		'app.meeting_department',
		'app.meeting_employee',
		'app.meeting_attendee',
		'app.meeting_topic',
		'app.notification',
		'app.notification_type',
		'app.notification_user',
		'app.training_evaluation',
		'app.training_schedule',
		'app.training_schedule_branch',
		'app.training_schedule_department',
		'app.training_schedule_employee',
		'app.databackup_logbook',
		'app.list_of_computer_list_of_software',
		'app.username_password_detail',
		'app.employee_designation',
		'app.employee_induction_training',
		'app.employee_training',
		'app.user_session',
		'app.evidence',
		'app.file_upload',
		'app.history',
		'app.language',
		'app.help',
		'app.approval',
		'app.message_user_inbox',
		'app.message',
		'app.message_user_sent',
		'app.message_user_thrash',
		'app.task',
		'app.department_benchmark',
		'app.fire_safety_equipment_list',
		'app.fire_extinguisher',
		'app.fire_extinguisher_type',
		'app.fire_type',
		'app.master_list_of_format_distributor',
		'app.report',
		'app.branch_benchmark',
		'app.master_list_of_format_branch',
		'app.master_list_of_format_department',
		'app.change_addition_deletion_request',
		'app.company',
		'app.company_benchmark',
		'app.custom_template',
		'app.internet_usage_detail',
		'app.list_of_acceptable_supplier',
		'app.supplier_category',
		'app.material_list_with_shelf_life',
		'app.material',
		'app.order_register'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ListOfMeasuringDevicesForCalibration = ClassRegistry::init('ListOfMeasuringDevicesForCalibration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ListOfMeasuringDevicesForCalibration);

		parent::tearDown();
	}

}