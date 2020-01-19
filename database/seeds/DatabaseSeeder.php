<?php

use App\Denticion;
use App\Discrepancia;
use App\FacialFrontal;
use App\PerfilPaciente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(PermissionsAndRolesSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(PacienteSeeder::class);
      $this->call(TelefonoSeeder::class);
      $this->call(AntecedenteMedicoSeeder::class);
      $this->call(AntecedenteOdontologicoSeeder::class);
      $this->call(AntecedenteOrtodoncicoSeeder::class);
      $this->call(DiagnosticoPrevioSeeder::class);
      $this->call(FacialFrontalSeeder::class);
      $this->call(PerfilPacienteSeeder::class);
      $this->call(DenticionSeeder::class);
      $this->call(LineaMediaSeeder::class);
      $this->call(MordidaSeeder::class);
      $this->call(RelacionSagitalSeeder::class);
      $this->call(TejidoIntraoralSeeder::class);
      $this->call(DiscrepanciaSeeder::class);
      $this->call(DientesPacienteSeeder::class);
    }
}
