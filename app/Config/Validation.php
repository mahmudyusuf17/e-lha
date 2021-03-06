<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	
	// validasi form user
	public $user = [
		'nama' => 'required|min_length[3]',
        'email' => 'required|min_length[3]|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[3]',
        'confirm_pass' => 'required|matches[password]',
	];
	public $user_errors = [
		'nama' => [
			'required' => 'Nama Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'Nama Terlalu Pendek'
		],
		'email' => [
			'required' => 'Email Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'Email Terlalu Pendek',
			'valid_email' => 'Email Tidak Valid',
			'is_unique' => 'Email Telah Digunakan, SIlakan Masukkan Email Lain'
		],
		'password' => [
			'required' => 'Password Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'Password Terlalu Pendek'
		],
		'confirm_pass' => [
			'required' => 'Konfirmasi Password Wajib Diisi dan Tidak Boleh Kosong',
			'matches' => 'Konfirmasi Password Tidak Sama'
		],
	];

	public $user_edit = [
		'name' => 'required|min_length[3]',
        'email' => 'required|min_length[3]|valid_email',
	];
	public $user_edit_errors = [
		'name' => [
			'required' => 'Nama Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'Nama Terlalu Pendek'
		],
		'email' => [
			'required' => 'Email Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'Email Terlalu Pendek',
			'valid_email' => 'Email Tidak Valid',
		],
		
	];

	//validation user login
	public $login = [
        'email' => 'required|min_length[3]|valid_email',
        'password' => 'required|min_length[3]',
	];
	public $login_errors = [
		'email' => [
			'required' => 'Email Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'Email Terlalu Pendek',
			'valid_email' => 'Email Tidak Valid'
		],
		'password' => [
			'required' => 'Password Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'Password Terlalu Pendek'
		],
	];

	// validation surat tugas
	public $surat = [
        'judul' => 'required|min_length[3]',
	];
	public $surat_errors = [
		'judul' => [
			'required' => 'Judul Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'Judul Terlalu Pendek',
			
		],
	];
	
	// validation input team
	public $team = [
		'nip' => 'required|min_length[3]',
		'nama' => 'required',
	];
	public $team_errors = [
		'nip' => [
			'required' => 'NIP Wajib Diisi dan Tidak Boleh Kosong',
			'min_length' => 'NIP Terlalu Pendek',
		],
		'nama' => [
			'required' => 'Nama Wajib Diisi dan Tidak Boleh Kosong',
		],
	];
}
