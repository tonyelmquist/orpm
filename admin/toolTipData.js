var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// applications_leases table
applications_leases_addTip=["",spacer+"This option allows all members of the group to add records to the 'Applications/Leases' table. A member who adds a record to the table becomes the 'owner' of that record."];

applications_leases_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Applications/Leases' table."];
applications_leases_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Applications/Leases' table."];
applications_leases_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Applications/Leases' table."];
applications_leases_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Applications/Leases' table."];

applications_leases_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Applications/Leases' table."];
applications_leases_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Applications/Leases' table."];
applications_leases_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Applications/Leases' table."];
applications_leases_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Applications/Leases' table, regardless of their owner."];

applications_leases_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Applications/Leases' table."];
applications_leases_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Applications/Leases' table."];
applications_leases_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Applications/Leases' table."];
applications_leases_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Applications/Leases' table."];

// residence_and_rental_history table
residence_and_rental_history_addTip=["",spacer+"This option allows all members of the group to add records to the 'Rental history' table. A member who adds a record to the table becomes the 'owner' of that record."];

residence_and_rental_history_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Rental history' table."];
residence_and_rental_history_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Rental history' table."];
residence_and_rental_history_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Rental history' table."];
residence_and_rental_history_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Rental history' table."];

residence_and_rental_history_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Rental history' table."];
residence_and_rental_history_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Rental history' table."];
residence_and_rental_history_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Rental history' table."];
residence_and_rental_history_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Rental history' table, regardless of their owner."];

residence_and_rental_history_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Rental history' table."];
residence_and_rental_history_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Rental history' table."];
residence_and_rental_history_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Rental history' table."];
residence_and_rental_history_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Rental history' table."];

// employment_and_income_history table
employment_and_income_history_addTip=["",spacer+"This option allows all members of the group to add records to the 'Employment and income history' table. A member who adds a record to the table becomes the 'owner' of that record."];

employment_and_income_history_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Employment and income history' table."];
employment_and_income_history_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Employment and income history' table."];
employment_and_income_history_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Employment and income history' table."];
employment_and_income_history_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Employment and income history' table."];

employment_and_income_history_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Employment and income history' table."];
employment_and_income_history_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Employment and income history' table."];
employment_and_income_history_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Employment and income history' table."];
employment_and_income_history_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Employment and income history' table, regardless of their owner."];

employment_and_income_history_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Employment and income history' table."];
employment_and_income_history_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Employment and income history' table."];
employment_and_income_history_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Employment and income history' table."];
employment_and_income_history_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Employment and income history' table."];

// references table
references_addTip=["",spacer+"This option allows all members of the group to add records to the 'References' table. A member who adds a record to the table becomes the 'owner' of that record."];

references_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'References' table."];
references_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'References' table."];
references_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'References' table."];
references_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'References' table."];

references_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'References' table."];
references_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'References' table."];
references_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'References' table."];
references_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'References' table, regardless of their owner."];

references_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'References' table."];
references_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'References' table."];
references_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'References' table."];
references_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'References' table."];

// applicants_and_tenants table
applicants_and_tenants_addTip=["",spacer+"This option allows all members of the group to add records to the 'Tenant Center' table. A member who adds a record to the table becomes the 'owner' of that record."];

applicants_and_tenants_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Tenant Center' table."];
applicants_and_tenants_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Tenant Center' table."];
applicants_and_tenants_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Tenant Center' table."];
applicants_and_tenants_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Tenant Center' table."];

applicants_and_tenants_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Tenant Center' table."];
applicants_and_tenants_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Tenant Center' table."];
applicants_and_tenants_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Tenant Center' table."];
applicants_and_tenants_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Tenant Center' table, regardless of their owner."];

applicants_and_tenants_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Tenant Center' table."];
applicants_and_tenants_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Tenant Center' table."];
applicants_and_tenants_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Tenant Center' table."];
applicants_and_tenants_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Tenant Center' table."];

// properties table
properties_addTip=["",spacer+"This option allows all members of the group to add records to the 'Property Center' table. A member who adds a record to the table becomes the 'owner' of that record."];

properties_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Property Center' table."];
properties_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Property Center' table."];
properties_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Property Center' table."];
properties_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Property Center' table."];

properties_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Property Center' table."];
properties_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Property Center' table."];
properties_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Property Center' table."];
properties_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Property Center' table, regardless of their owner."];

properties_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Property Center' table."];
properties_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Property Center' table."];
properties_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Property Center' table."];
properties_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Property Center' table."];

// units table
units_addTip=["",spacer+"This option allows all members of the group to add records to the 'Units Center' table. A member who adds a record to the table becomes the 'owner' of that record."];

units_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Units Center' table."];
units_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Units Center' table."];
units_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Units Center' table."];
units_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Units Center' table."];

units_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Units Center' table."];
units_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Units Center' table."];
units_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Units Center' table."];
units_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Units Center' table, regardless of their owner."];

units_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Units Center' table."];
units_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Units Center' table."];
units_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Units Center' table."];
units_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Units Center' table."];

// rental_owners table
rental_owners_addTip=["",spacer+"This option allows all members of the group to add records to the 'Owners Center' table. A member who adds a record to the table becomes the 'owner' of that record."];

rental_owners_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Owners Center' table."];
rental_owners_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Owners Center' table."];
rental_owners_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Owners Center' table."];
rental_owners_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Owners Center' table."];

rental_owners_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Owners Center' table."];
rental_owners_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Owners Center' table."];
rental_owners_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Owners Center' table."];
rental_owners_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Owners Center' table, regardless of their owner."];

rental_owners_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Owners Center' table."];
rental_owners_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Owners Center' table."];
rental_owners_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Owners Center' table."];
rental_owners_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Owners Center' table."];

// audit_trail table
audit_trail_addTip=["",spacer+"This option allows all members of the group to add records to the 'Audit Trail' table. A member who adds a record to the table becomes the 'owner' of that record."];

audit_trail_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Audit Trail' table."];
audit_trail_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Audit Trail' table."];
audit_trail_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Audit Trail' table."];
audit_trail_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Audit Trail' table."];

audit_trail_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Audit Trail' table."];
audit_trail_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Audit Trail' table."];
audit_trail_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Audit Trail' table."];
audit_trail_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Audit Trail' table, regardless of their owner."];

audit_trail_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Audit Trail' table."];
audit_trail_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Audit Trail' table."];
audit_trail_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Audit Trail' table."];
audit_trail_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Audit Trail' table."];

// maintenance_tasks table
maintenance_tasks_addTip=["",spacer+"This option allows all members of the group to add records to the 'Maintenance tasks' table. A member who adds a record to the table becomes the 'owner' of that record."];

maintenance_tasks_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Maintenance tasks' table."];
maintenance_tasks_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Maintenance tasks' table."];
maintenance_tasks_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Maintenance tasks' table."];
maintenance_tasks_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Maintenance tasks' table."];

maintenance_tasks_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Maintenance tasks' table."];
maintenance_tasks_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Maintenance tasks' table."];
maintenance_tasks_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Maintenance tasks' table."];
maintenance_tasks_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Maintenance tasks' table, regardless of their owner."];

maintenance_tasks_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Maintenance tasks' table."];
maintenance_tasks_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Maintenance tasks' table."];
maintenance_tasks_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Maintenance tasks' table."];
maintenance_tasks_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Maintenance tasks' table."];

// employees table
employees_addTip=["",spacer+"This option allows all members of the group to add records to the 'Employees' table. A member who adds a record to the table becomes the 'owner' of that record."];

employees_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Employees' table."];
employees_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Employees' table."];
employees_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Employees' table."];
employees_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Employees' table."];

employees_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Employees' table."];
employees_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Employees' table."];
employees_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Employees' table."];
employees_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Employees' table, regardless of their owner."];

employees_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Employees' table."];
employees_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Employees' table."];
employees_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Employees' table."];
employees_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Employees' table."];

// task_types table
task_types_addTip=["",spacer+"This option allows all members of the group to add records to the 'Task types' table. A member who adds a record to the table becomes the 'owner' of that record."];

task_types_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Task types' table."];
task_types_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Task types' table."];
task_types_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Task types' table."];
task_types_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Task types' table."];

task_types_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Task types' table."];
task_types_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Task types' table."];
task_types_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Task types' table."];
task_types_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Task types' table, regardless of their owner."];

task_types_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Task types' table."];
task_types_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Task types' table."];
task_types_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Task types' table."];
task_types_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Task types' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
