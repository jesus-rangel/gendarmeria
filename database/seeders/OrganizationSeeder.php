<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organization;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::create([
            'name' => 'Santiago Antonio Cano',            
            'provincia' => 'Buenos Aires',
            'localidad' => 'Ciudad Evita',
            'domicilio' => 'El Payador 1903',
            'telefono' => '4487-5307 Fax 4487-1122'
        ]);
        Organization::create([
            'name' => 'Iose Campo de Mayo',            
            'provincia' => 'Buenos Aires',
            'localidad' => 'Campo de Mayo',
            'domicilio' => 'Ruta 8 Puerta 4',
            'telefono' => '4666-2960/3659/1458(4668-2469)'
        ]);
        Organization::create([
            'name' => 'Colegio Ftico de Mercedes',            
            'provincia' => 'Buenos Aires',
            'localidad' => 'Mercedes',
            'domicilio' => 'Calle 13 Nro 760',
            'telefono' => '02324-432224'
        ]);
        Organization::create([
            'name' => 'Iose Mar Del Plata',            
            'provincia' => 'Buenos Aires',
            'localidad' => 'Mar Del Plata',
            'domicilio' => 'Belgrano 2461',
            'telefono' => '0223-4944928/4935450'
        ]);
        Organization::create([
            'name' => 'Farmacia Vio',            
            'provincia' => 'Buenos Aires',
            'localidad' => 'Lomas de Zamora',
            'domicilio' => 'Av. Meeks 2461',
            'telefono' => '4352-0015'
        ]);
        Organization::create([
            'name' => 'Iose Larrea',            
            'provincia' => 'Capital Federal',
            'localidad' => 'Capital Federal',
            'domicilio' => 'Larrea 552',
            'telefono' => '4964-1889'
        ]);
        Organization::create([
            'name' => 'Iose Pringles',            
            'provincia' => 'Capital Federal',
            'localidad' => 'Capital Federal',
            'domicilio' => 'Avenida Rivadavia 4299',
            'telefono' => '4981-4433'
        ]);
        Organization::create([
            'name' => 'Iose Matienzo',            
            'provincia' => 'Capital Federal',
            'localidad' => 'Capital Federal',
            'domicilio' => 'Avenida Rivadavia 4299',
            'telefono' => '4576-5746/5747',
            'notas' => 'Hospital Militar'
        ]);
        Organization::create([
            'name' => 'Iose Centinela',            
            'provincia' => 'Capital Federal',
            'localidad' => 'Capital Federal',
            'domicilio' => 'Edificio Centinela',
            'telefono' => '4310-2629/2500',
            'notas' => 'Larrea'
        ]);
        Organization::create([
            'name' => 'Farmacia Central',            
            'provincia' => 'Catamarca',
            'localidad' => 'Tinogasta',
            'domicilio' => 'Catamarca, Presidente Perón y Tristan Villafañe',
            'telefono' => '03837-420931'
        ]);
        Organization::create([
            'name' => 'Santa Rita',            
            'provincia' => 'Catamarca',
            'localidad' => 'Tinogasta',
            'domicilio' => 'Rivadavia Esquina Presidente Perón'
        ]);
        Organization::create([
            'name' => 'Farmacia San Francisco',            
            'provincia' => 'Catamarca',
            'localidad' => 'Tinogasta',
            'domicilio' => 'Tristan Villafañe Esquina Ruta 60'
        ]);
        Organization::create([
            'name' => 'Farmacia Virgen Del Carmen',            
            'provincia' => 'Catamarca',
            'localidad' => 'Catamarca',
            'domicilio' => 'San Martín 679',
            'telefono' => '0383-4459610',
            'notas' => 'FARMAR'
        ]);
        Organization::create([
            'name' => 'Farmacia Chacabuco',            
            'provincia' => 'Catamarca',
            'localidad' => 'Catamarca',
            'domicilio' => 'Chacabuco 647',
            'telefono' => '0383-4451051',
            'notas' => 'FARMAR'
        ]);
        Organization::create([
            'name' => 'Farmacia Horizonte',            
            'provincia' => 'Chaco',
            'localidad' => 'La Leonesa',
            'domicilio' => 'Avenida Mariano Moreno 340',
            'telefono' => '03722-470420'
        ]);
        Organization::create([
            'name' => 'Farmacia Farma Shop',            
            'provincia' => 'Chaco',
            'domicilio' => 'Avenida Mariano Moreno 248',
            'localidad' => 'La Leonesa',
            'telefono' => '0362-4470224'
        ]);
        Organization::create([
            'name' => 'Farmacia Social 14',            
            'provincia' => 'Chubut',
            'localidad' => 'Esquel',
            'domicilio' => 'Belgrano 702',
            'telefono' => '02945-452053'
        ]);
        Organization::create([
            'name' => 'Farmacia Querol Farma SRL',            
            'provincia' => 'Chubut',
            'localidad' => 'Trelew',
            'domicilio' => '25 de Mayo 401',
            'telefono' => '02280-4435963',
            'notas' => 'farma esquel'
        ]);
        Organization::create([
            'name' => 'Farmacia Crisol',            
            'provincia' => 'Chubut',
            'localidad' => 'Rawson',
            'domicilio' => 'Belgrano 716',
            'telefono' => '02965-482054'
        ]);
        Organization::create([
            'name' => 'Farmacia Cordillerana',            
            'provincia' => 'Chubut',
            'localidad' => 'Rio Mayo',
            'domicilio' => 'Chubut, San Martin 538',
            'telefono' => '02903-420377'
        ]);
        Organization::create([
            'name' => 'Farmacia Patagónicas',            
            'provincia' => 'Chubut',
            'localidad' => 'Trelew',
            'domicilio' => 'Avenida Hipólito Yrigoyen 2972',
            'notas' => 'viene como farma trelew'
        ]);
        Organization::create([
            'name' => 'Iose Comodoro Rivadavia',            
            'provincia' => 'Chubut',
            'localidad' => 'C.Rivadavia',
            'domicilio' => 'Hipólito Yrigoyen 595'
        ]);
        Organization::create([
            'name' => 'Cir.Ftico Jesus Maria',            
            'provincia' => 'Córdoba',
            'domicilio' => 'Avenida dr. Miguel Juarez 575',
            'localidad' => 'Jesus Maria',
            'telefono' => '03525-422722'
        ]);
        Organization::create([
            'name' => 'Iose Cordoba',            
            'provincia' => 'Córdoba',
            'localidad' => 'Córdoba',
            'domicilio' => 'Alvear 164',
            'telefono' => '0351-4342869/4220983'
        ]);
        Organization::create([
            'name' => 'Farmacia Alasia',            
            'provincia' => 'Córdoba',
            'localidad' => 'La Calera',
            'domicilio' => 'Velez Sarfield 437',
            'telefono' => '03543-466694'
        ]);
        Organization::create([
            'name' => 'Farmacia Flores 2',            
            'provincia' => 'Córdoba',
            'localidad' => 'Jesus Maria',
            'domicilio' => 'Cordoba, Italia 702 Esquina Ameguino',
            'telefono' => '03525-426310'
        ]);
        Organization::create([
            'name' => 'Ana Londero de Arguello',            
            'provincia' => 'Córdoba',
            'localidad' => 'Colonia Caroya',
            'domicilio' => 'Avenida San Martin 3895',
            'telefono' => '03525-465866'
        ]);
        Organization::create([
            'name' => 'Farmacia Serbo 1 y 2',            
            'provincia' => 'Córdoba',
            'localidad' => 'Colonia Caroya',
            'domicilio' => 'Avenida San Martin 3773',
        ]);
        Organization::create([
            'name' => 'Farmacia Grangetto',            
            'provincia' => 'Córdoba',
            'domicilio' => 'Avenida San Martín 130',
            'localidad' => 'V. del Dique',
            'telefono' => '03546-497294/354615659433'
        ]);
        Organization::create([
            'name' => 'Farmacia France',            
            'provincia' => 'Córdoba',
            'localidad' => 'Villa Maria',
            'domicilio' => 'Mitre 54',
            'telefono' => '0353-4613067',
            'notas' => 'subnivel'
        ]);
        Organization::create([
            'name' => 'Farmacia Romanutti',            
            'provincia' => 'Córdoba',
            'localidad' => 'Colonia Caroyo',
            'domicilio' => 'Don Bosco 2008 Esquina H. Venturini',
            'telefono' => '03525-465405'
        ]);
        Organization::create([
            'name' => 'Farmacia Amfa 4',            
            'provincia' => 'Córdoba',
            'localidad' => 'Jesus Maria',
            'domicilio' => 'Córdoba 990',
            'telefono' => '03525-444155'
        ]);
        Organization::create([
            'name' => 'Farmacia Ituzaingo',            
            'provincia' => 'Corrientes',
            'localidad' => 'Ituzaingo',
            'domicilio' => 'Corrientes 1224',
            'telefono' => '03786-420692'
        ]);
        Organization::create([
            'name' => 'Iose Corrientes',            
            'provincia' => 'Corrientes',
            'localidad' => 'Corrientes',
            'domicilio' => 'Santa Fe 1244',
            'telefono' => '03794-421584/421587'
        ]);
        Organization::create([
            'name' => 'Farmar Red Farmacéutica',            
            'provincia' => 'Corrientes',
            'localidad' => 'Corrientes',
            'domicilio' => 'Salta 1596',
            'telefono' => '03794-421561'
        ]);
        Organization::create([
            'name' => 'Farmacia San Martin',            
            'provincia' => 'Corrientes',
            'localidad' => 'Santa Lucía',
            'domicilio' => 'San Martín 701'
        ]);
        Organization::create([
            'name' => 'Farmacia Catedral',            
            'provincia' => 'Corrientes',
            'localidad' => 'Corientes',
            'domicilio' => 'San Lorenzo 902',
            'telefono' => '0379-4421191'
        ]);
        Organization::create([
            'name' => 'Farmacia del Indio',            
            'provincia' => 'Corrientes',
            'localidad' => 'Santo Tome',
            'domicilio' => 'Yrigoyen 502',
            'telefono' => '03756-420123/03756-15407121'
        ]);
        Organization::create([
            'name' => 'Farmacia Amfa 2',            
            'domicilio' => 'Corrientes, Calle 7 entre C y D',
            'localidad' => 'Ituzaingo',
            'telefono' => '02648-441056'
        ]);
        Organization::create([
            'name' => 'Farmacia del Pueblo',            
            'provincia' => 'Entre Ríos',
            'localidad' => 'Chajari',
            'domicilio' => 'Sarmiento 2646',
            'telefono' => '03456-421050/420264'
        ]);
        Organization::create([
            'name' => 'Farmacia Cruz Azul',            
            'provincia' => 'Entre Ríos',
            'localidad' => 'Concordia',
            'domicilio' => 'Entre Ríos 493',
            'telefono' => '0345-4212850'
        ]);
        Organization::create([
            'name' => 'Farmacia La Estrella',            
            'domicilio' => 'Entre Ríos, Entre Ríos 651',
            'localidad' => 'Concordia',
            'telefono' => '0345-4212704/4217884'
        ]);
        Organization::create([
            'name' => 'Iose Paraná',            
            'provincia' => 'Entre Ríos',
            'localidad' => 'Paraná',
            'domicilio' => 'Ernesto Bavio 233',
            'telefono' => '0343-4235936'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Francia',            
            'provincia' => 'Entre Ríos',
            'localidad' => 'Colón',
            'domicilio' => 'San Martín 1050',
            'telefono' => '03447-422008'
        ]);
        Organization::create([ 
            'name' => 'Farmacia 25 de Mayo',            
            'provincia' => 'Entre Ríos',
            'domicilio' => '25 de Mayo 900',
            'localidad' => 'Gualeguaychu',
            'telefono' => '03446-436758'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Alba',            
            'provincia' => 'Entre Ríos',
            'localidad' => 'C. del Uruguay',
            'domicilio' => '9 de Julio 1302',
            'telefono' => '03442-425753'
        ]);
        Organization::create([ 
            'name' => 'Farmacia San José',            
            'provincia' => 'Entre Ríos',
            'localidad' => 'Federación',
            'domicilio' => 'D\'Angelo 48',
            'telefono' => '03456-481999'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Galarza',            
            'provincia' => 'Entre Ríos',
            'localidad' => 'Gral. Galarza',
            'domicilio' => 'Tratado del Pilar 502',
            'telefono' => '03444-481050'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Santa Rosa',            
            'provincia' => 'Formosa',
            'localidad' => 'Pirane',
            'domicilio' => 'R.S. Peña 335',
            'telefono' => '03704-461335/460026'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Farma Center',            
            'provincia' => 'Formosa',
            'domicilio' => 'Formosa, Av. San Martín 667',
            'localidad' => 'Clorinda',
            'telefono' => '03718-431893'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Las Lomitas',            
            'provincia' => 'Formosa',
            'localidad' => 'Las Lomitas',
            'domicilio' => 'Saavedra S/N',
            'telefono' => '03715-432475/432792'
        ]);
        Organization::create([ 
            'name' => 'Farmacia San Javier',            
            'provincia' => 'Formosa',
            'localidad' => 'Pirane',
            'domicilio' => 'Avenida 9 de Julio 740',
            'telefono' => '0370 449-1690'
        ]);
        Organization::create([ 
            'name' => 'Farmacia San Silvestre',            
            'provincia' => 'Jujuy',
            'localidad' => 'La Quiaca',
            'domicilio' => '9 de Julio 139',
            'telefono' => '03885-422207'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Yrigoyen',            
            'provincia' => 'Jujuy',
            'localidad' => 'S.S. de Jujuy',
            'domicilio' => 'Avenida Hipólito Yrigoyen 620',
            'telefono' => '0388-4225533'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Auzza',            
            'provincia' => 'Jujuy',
            'localidad' => 'La Quiaca',
            'domicilio' => 'Avenida La Madrid 446',
            'telefono' => '03885-422484'
        ]);
        Organization::create([ 
            'name' => 'Coop de SS PCO General Acha',           
            'provincia' => 'La Pampa',
            'localidad' => 'General Acha',
            'domicilio' => 'Balcarce 483/85',
            'telefono' => '02952-436497'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Arboit',            
            'provincia' => 'Mendoza',
            'localidad' => 'Guaymallen',
            'domicilio' => 'Ignacio Molina 231 Unimev',
            'telefono' => '0261-264789/4212123'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Tupungato',            
            'provincia' => 'Mendoza',
            'domicilio' => 'Liniers 399',
            'localidad' => 'Tupungato',
            'telefono' => '0261-264789/4212123'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Malargue',            
            'localidad' => 'Malargue',
            'domicilio' => 'Esquivel A y Villegas',
            'telefono' => '02627-471340'
        ]);
        Organization::create([ 
            'name' => 'Farmacia San Daniel',            
            'provincia' => 'Mendoza',
            'localidad' => 'Malargue',
            'domicilio' => 'Avenida San Martín 975',
            'telefono' => '0260-4471518'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Tunuyan-Uspallata',            
            'provincia' => 'Mendoza',
            'localidad' => 'Uspallata',
            'domicilio' => 'Las Heras 350',
            'telefono' => '02624-420368'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Tunuyan',            
            'provincia' => 'Mendoza',
            'localidad' => 'Tunuyan',
            'domicilio' => 'San Martín 1157',
            'telefono' => '02622-425061'
        ]);
        Organization::create([ 
            'name' => 'Farmacia del Puente',            
            'provincia' => 'Mendoza',
            'localidad' => 'Godoy Cruz',
            'domicilio' => 'San Martín 900',
        ]);
        Organization::create([ 
            'name' => 'Iose Mendoza',            
            'provincia' => 'Mendoza',
            'localidad' => 'Mendoza',
            'domicilio' => 'Paseo Sarmiento 50',
            'telefono' => '0261-4291402/4299615'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Tunuyan 2',            
            'provincia' => 'Mendoza',
            'localidad' => 'Rodeo de la Cruz',
            'domicilio' => 'Bandera de los Andes 9401',
            'telefono' => '02614-910781/4913533'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Del Aguila',            
            'provincia' => 'Mendoza',
            'localidad' => 'Tunuyan',
            'domicilio' => 'San Martin 650',
            'telefono' => '02622-422557/42286'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Malargue 2',            
            'provincia' => 'Mendoza',
            'localidad' => 'Malargue',
            'domicilio' => 'Avenida General Roca Este 534',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Río Grande',            
            'provincia' => 'Mendoza',
            'localidad' => 'Malargue',
            'domicilio' => 'Adolfo Puebla 1198',
            'telefono' => '02627-471340'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Bravo',            
            'provincia' => 'Misiones',
            'localidad' => 'Puerto Iguazu',
            'domicilio' => 'Avenida Victoria Aguirre 423',
            'telefono' => '03757-420479'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Concepción',            
            'provincia' => 'Misiones',
            'localidad' => 'C. de las Sierras',
            'domicilio' => 'Bartolomé Mitre y Saenz Peña',
            'telefono' => '03758-470178'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Spohn',            
            'provincia' => 'Misiones',
            'localidad' => 'L.N. Alem',
            'domicilio' => 'Avenida Belgrano 301',
            'telefono' => '03754-420441'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Centro',            
            'provincia' => 'Misiones',
            'localidad' => 'San Javier',
            'domicilio' => '25 de Mayo y Salvador Letini'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Gabriel',            
            'provincia' => 'Misiones',
            'localidad' => 'San Javier',
            'domicilio' => 'Lavalle 798',
            'telefono' => '03764-470354'
        ]);
        Organization::create([ 
            'name' => 'Iose Posadas',            
            'provincia' => 'Misiones',
            'localidad' => 'Posadas',
            'domicilio' => 'Junín 1639',
            'telefono' => '0376-4437590/4420578'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Solidaria',            
            'provincia' => 'Misiones',
            'localidad' => 'El Dorado',
            'domicilio' => 'Avenida San Martín km 10',
            'telefono' => '03751-421952'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Zapaia',            
            'provincia' => 'Misiones',
            'localidad' => 'Bdo. de Irigoyen',
            'domicilio' => 'Avenida Brasil S/N',
            'telefono' => '03741-420219'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Gomez',            
            'provincia' => 'Misiones',
            'localidad' => 'Puerto Rico',
            'domicilio' => 'Avenida San Martín 1301',
            'telefono' => '03743-477840'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Gabriel Bis',            
            'provincia' => 'Misiones',
            'localidad' => 'Obera',
            'domicilio' => 'Misiones, Av Libertad 799',
            'telefono' => '03755-407770'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Cece',            
            'provincia' => 'Misiones',
            'localidad' => 'Montecarlo',
            'domicilio' => 'Las Camelias S/N',
            'telefono' => '03751-481551'
        ]);
        Organization::create([ 
            'name' => 'Farmacia de Los Andes',            
            'provincia' => 'Misiones',
            'localidad' => 'Puerto Esperanza',
            'domicilio' => '25 de Mayo Nro 8',
            'telefono' => '03757-480740'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Galénica',            
            'provincia' => 'Neuquén',
            'localidad' => 'S.M.D Los Andes',
            'domicilio' => 'Villegas 890',
            'telefono' => '02972-429396'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Faro Azul',            
            'provincia' => 'Neuquén',
            'localidad' => 'Alumine',
            'domicilio' => 'Cacique Saihueque 679',
            'telefono' => '0294-215573837'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Ceez',            
            'provincia' => 'Neuquén',
            'localidad' => 'Zapala',
            'domicilio' => 'Luis Monti 444',
            'telefono' => '02942-424839'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Lanín',            
            'provincia' => 'Neuquén',
            'localidad' => 'Jujin de Los Andes',
            'domicilio' => 'Mariano Moreno 334',
            'telefono' => '02972-491792'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Coop Ados',           
            'provincia' => 'Neuquén',
            'domicilio' => 'Avenida Argentina 1000',
            'localidad' => 'Neuquén',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Inst Mun de Prev Soc',            
            'provincia' => 'Neuquén',
            'localidad' => 'Neuquén',
            'domicilio' => 'Fotheringham 277',
            'telefono' => '0299-4433978'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Inst Mun de Prev Soc 2',            
            'provincia' => 'Neuquén',
            'localidad' => 'Neuquén',
            'domicilio' => 'Roca 698',
            'telefono' => '0299-4303863'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Hueney',            
            'provincia' => 'Neuquén',
            'localidad' => 'Las Lajas',
            'domicilio' => 'Roca 455',
            'telefono' => '02942-499271'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Santa Julia',            
            'provincia' => 'Neuquén',
            'domicilio' => 'Coronel Suarez',
            'localidad' => 'Jujín de los Andes',
            'telefono' => '02942-499271'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Doctor Pasteur',            
            'provincia' => 'Río Negro',
            'localidad' => 'Bariloche',
            'domicilio' => 'Elordi 1164',
            'telefono' => '02942-499271'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Asurmendi',            
            'provincia' => 'Río Negro',
            'localidad' => 'Bariloche',
            'domicilio' => 'Perito Moreno 730 Local 1',
            'telefono' => '02942-499271'
        ]);
        Organization::create([ 
            'name' => 'Farmacia del Pueblo 2',            
            'provincia' => 'Río Negro',
            'localidad' => 'El Bolsón',
            'domicilio' => 'Avenida Belgrano 543',
            'telefono' => '02944-483438'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Capitanelli',            
            'provincia' => 'Salta',
            'localidad' => 'Tartagal',
            'domicilio' => 'Alberdi 131',
            'telefono' => '03873-423801'
        ]);
        Organization::create([ 
            'name' => 'Iose Salta',            
            'provincia' => 'Salta',
            'localidad' => 'Salta',
            'domicilio' => 'Bartolomé Mitre 685',
            'telefono' => '0387-4211672',
            'notas' => '03871-54562245 Contacto Ramón'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Central Orán',            
            'provincia' => 'Salta',
            'localidad' => 'Orán',
            'domicilio' => 'Avenida López y Planes 205',
            'telefono' => '03878-425595',
        ]);
        Organization::create([ 
            'name' => 'Farmacia San José 2',            
            'provincia' => 'Salta',
            'localidad' => 'Embarcación',
            'domicilio' => 'Independencia 138',
            'telefono' => '03878-471173',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Avenida',            
            'provincia' => 'Salta',
            'localidad' => 'Salvador Mzza',
            'domicilio' => 'Independencia 2',
            'telefono' => '03875-471991',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Marquesado',            
            'provincia' => 'Salta',
            'localidad' => 'Marquesado',
            'domicilio' => 'San Juan, Av Lib General San Martín 7298',
            'telefono' => '0264-4332085',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Arias',            
            'provincia' => 'San Juan',
            'localidad' => 'Barreal',
            'domicilio' => 'Pte Roca S/N',
            'telefono' => '02648-441104',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Centinela',            
            'provincia' => 'San Juan',
            'localidad' => 'San Juan',
            'domicilio' => 'Sargento Acosta 2077 Sur',
            'telefono' => '0264-4345255',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Forte',            
            'provincia' => 'San Juan',
            'localidad' => 'Jachal',
            'domicilio' => 'Sarmiento 96',
            'telefono' => '02647-420160',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Amfa 3',            
            'provincia' => 'San Juan',
            'localidad' => 'Barreal',
            'domicilio' => 'Soler S/N',
            'telefono' => '02648-441056',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Ceri',            
            'provincia' => 'San Juan',
            'localidad' => 'Jachal',
            'domicilio' => '25 de Mayo 651',
            'telefono' => '03511-56112783',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Río Turbio',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Turbio',
            'domicilio' => 'Gdor Lista 376',
            'telefono' => '02902-421112',
        ]);
        Organization::create([ 
            'name' => 'Farmacia San Jorge',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Perito Moreno',
            'domicilio' => 'San Martín 1302',
            'telefono' => '02902-433350',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Calafate',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'El Calafate',
            'domicilio' => 'Avenida Libertador 1192'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Moderna',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'Roca 1057',
            'telefono' => '02966-420277'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Santa Cruz',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => '25 de Mayo 536'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Integral',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'Corrientes 196 Esquina Zapiola',
            'telefono' => '02966-436374/429658'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Autofarma',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'N. Kirchner 840'
        ]);
        Organization::create([ 
            'name' => 'Farmacia del Pueblo 3',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'Avenida Kirchner 852',
        ]);
        Organization::create([ 
            'name' => 'Farmacia del Cerro',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'El Calafate',
            'domicilio' => 'Avenida Libertador 1337',
            'telefono' => '02902-491496'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Hospital',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'El Calafate',
            'domicilio' => 'J. A. Roca 1391'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Libertador',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'El Calafate',
            'domicilio' => 'Avenida Libertador 998'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Río Turbio 2',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Turbio',
            'domicilio' => 'Avenida Gen. Nac. 63 Mnz 160 lote 7',
            'telefono' => '02902-422451'
        ]);
        Organization::create([ 
            'name' => 'Farmacia 28 de Noviembre',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => '9 de Julio 810',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Autofarma Amsa',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'Av. Kirchner 1863',
            'telefono' => '02966-437947'
        ]);
        Organization::create([
            'name' => 'Farmacia Autofarma 2',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'Avenida Roca 1029',
            'telefono' => '02966-437947' // repetido
        ]);
        Organization::create([ 
            'name' => 'Farmacia Express 2',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'Avenida Gregores y Richieri',
            'telefono' => '02902-491496'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Express SRL',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'Bark y Ruta 3/Richieri 997',
            'telefono' => '02902-491496' // repetido
        ]);
        Organization::create([ 
            'name' => 'Farmacia Aconcagua',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'San Martín 1001',
            'telefono' => '02902-491496' // repetido
        ]);
        Organization::create([ 
            'name' => 'Farmacia La Franco',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => '9 de Julio 5',
            'telefono' => '02902-491496' // repetido
        ]);
        Organization::create([ 
            'name' => 'Farmacia 12 de Agosto',            
            'provincia' => 'Santa Cruz',
            'localidad' => 'Río Gallegos',
            'domicilio' => 'Tomás Fernández esquina Banciella',
            'telefono' => '02902-491496' // repetido
        ]);
        Organization::create([ 
            'name' => 'Iose Rosario',            
            'provincia' => 'Santa Fe',
            'localidad' => 'Rosario',
            'domicilio' => 'La Rioja 1445',
            'telefono' => '0341-4485726'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Asoc Fticos del Norte de Sta Fe',            
            'provincia' => 'Santa Fe',
            'localidad' => 'Reconquista',
            'domicilio' => 'Iurraspe 1540',
            'telefono' => '421749/743323'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Catedral 1',            
            'provincia' => 'Santiago del Estero',
            'localidad' => 'Santiago del Estero',
            'domicilio' => 'Independencia 94',
            'telefono' => '0379-4468111',
            'notas' => 'Farmalife'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Catedral 2',            
            'provincia' => 'Santiago del Estero',
            'localidad' => 'Santiago del Estero',
            'domicilio' => 'Avenida Belgrano 196',
            'telefono' => '0379-154232902',
            'notas' => 'Farmalife'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Catedral 3',            
            'provincia' => 'Santiago del Estero',
            'localidad' => 'Santiago del Estero',
            'domicilio' => 'Tucuman 105',
            'telefono' => '0379-44-68111',
            'notas' => 'Farmalife'
        ]);
        Organization::create([ 
            'name' => 'Farmacia Diba-Ushuaia',            
            'provincia' => 'Tierra del Fuego',
            'localidad' => 'Ushuaia',
            'domicilio' => 'Yaganes 251',
            'telefono' => '02901-435406',
        ]);
        Organization::create([ 
            'name' => 'Farmacia Oniken',            
            'provincia' => 'Tierra del Fuego',
            'localidad' => 'Río Grande',
            'domicilio' => 'Rosales 416',
            'telefono' => '02964-422631',
        ]);
        Organization::create([ 
            'name' => 'Farmacia San Martín 2',            
            'provincia' => 'Tierra del Fuego',
            'localidad' => 'Ushuaia',
            'domicilio' => 'Avenida San Martín 1241',
            'telefono' => '02901-424752',
        ]);
        Organization::create([ 
            'name' => 'Farmacia San Martín',            
            'provincia' => 'Tucumán',
            'localidad' => 'Tucumán',
            'domicilio' => 'San Martín 1241',
            'telefono' => '0381-4219295/98',
        ]);
    }
}
