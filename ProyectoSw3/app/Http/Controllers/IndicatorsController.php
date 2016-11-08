<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\constant;

use App\material_provider;

use Laracast\Flash\FlashServiceProvider;
/**
 * Variables Globales
 */
$matype='material_type';
$protype = 'provider_type';
$quantity='quantity';
$municipality='Municipality';
$board='Cartón';
$pet='Pet';
$archive='Archivo';
$blow='Soplado';
$junk='Chatarra';
$metal='Metal';
$plega='Plega';
$glass='Vidrio';
$frame='Marco';
$armenia='Armenia';
$buena='Buenavista';
$calarca='Calarcá'; 
$circasia='Circasia';
$cordoba='Córdoba';
$filandia='Filandia';
$genova='Génova';
$tebaida='Tebaida';
$montenegro='Montenegro';
$pijao='Pijao';
$quimbaya='Quimbaya';
$salento='Salento';
$junkman='Chatarrero';
$association='Asociación';
$recuperator='Recuperador de oficio';
$recycler='Reciclador';
$fabric='Punto de fábrica';

class IndicatorsController extends Controller
{
    /**
     *
     * Método obtiene la cantidad total de material que se ha registrado en la empresa
     *
     */


    public function index()
    {
        //
        global $matype,$quantity,$board,$pet,$archive,$blow,$junk,$metal,$plega,$glass,$frame;
        $constant = new constant();
        $constant->board = material_provider::all()->where($matype, $board)->sum($quantity);
        $constant->pet = material_provider::all()->where($matype, $pet)->sum($quantity);
        $constant->archive = material_provider::all()->where($matype, $archive)->sum($quantity);
        $constant->blow = material_provider::all()->where($matype, $blow)->sum($quantity);
        $constant->junk = material_provider::all()->where($matype, $junk)->sum($quantity);
        $constant->metal = material_provider::all()->where($matype, $metal)->sum($quantity);
        $constant->plega = material_provider::all()->where($matype, $plega)->sum($quantity);
        $constant->glass = material_provider::all()->where($matype, $glass)->sum($quantity);
        $constant->frame = material_provider::all()->where($matype, $frame)->sum($quantity);
        
        return view('admin.indicators.fabricIndicator')->with('constant', $constant);
    }

    /**
     *
     * Método que obtiene la cantidad de material por comuna y la cantidad
     * total de material por centro de acopio en cada municipio
     *
     */
    public function indexIndicatorTwo()
    {
        //Obteniendo la cantidad total de materiales por comuna
        global  $matype,$quantity,$municipality,$board,$pet,$archive,$blow,$junk,$metal,$plega,$glass,$frame, $armenia,
                $circasia,$calarca,$buena,$cordoba,$filandia,$genova,$tebaida,$montenegro,$pijao,$quimbaya,$salento,$protype; 
        $comuna = new constant();
        $general_comuna = material_provider::all()->where($protype, 'Comuna');
        $comuna->board = $general_comuna->where($matype, $board)->sum($quantity);
        $comuna->pet = $general_comuna->where($matype, $pet)->sum($quantity);
        $comuna->archive = $general_comuna->where($matype, $archive)->sum($quantity);
        $comuna->blow = $general_comuna->where($matype, $blow)->sum($quantity);
        $comuna->junk = $general_comuna->where($matype, $junk)->sum($quantity);
        $comuna->metal = $general_comuna->where($matype, $metal)->sum($quantity);
        $comuna->plega = $general_comuna->where($matype, $plega)->sum($quantity);
        $comuna->glass = $general_comuna->where($matype, $glass)->sum($quantity);
        $comuna->frame = $general_comuna->where($matype, $frame)->sum($quantity);
        //obteniendo la cantidad de materiales por centro de acopio
        $general_acopio = material_provider::all()->where($protype, 'Centro de acopio');
        $c_acopio  = array(
            
            //Cantidad de material para el municipio de Armenia

            'armenia_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $armenia)->sum($quantity), 

            'armenia_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $armenia)->sum($quantity),

            'armenia_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $armenia)->sum($quantity), 

            'armenia_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $armenia)->sum($quantity),

            'armenia_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $armenia)->sum($quantity),

            'armenia_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $armenia)->sum($quantity),

            'armenia_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $armenia)->sum($quantity), 

            'armenia_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $armenia)->sum($quantity),

            'armenia_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $armenia)->sum($quantity),

            //Cantidad de material para el municipio de Buenavista

            'buena_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $buena)->sum($quantity), 

            'buena_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $buena)->sum($quantity),

            'buena_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $buena)->sum($quantity), 

            'buena_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $buena)->sum($quantity),

            'buena_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $buena)->sum($quantity),

            'buena_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $buena)->sum($quantity),

            'buena_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $buena)->sum($quantity), 

            'buena_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $buena)->sum($quantity),

            'buena_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $buena)->sum($quantity), 

             //Cantidad de material para el municipio de Calarcá

            'calarca_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $calarca)->sum($quantity), 

            'calarca_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $calarca)->sum($quantity),

            'calarca_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $calarca)->sum($quantity), 

            'calarca_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $calarca)->sum($quantity),

            'calarca_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $calarca)->sum($quantity),

            'calarca_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $calarca)->sum($quantity),

            'calarca_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $calarca)->sum($quantity), 

            'calarca_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $calarca)->sum($quantity),

            'calarca_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $calarca)->sum($quantity),

            //Cantidad de material para el municipio de Circasia

            'circasia_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $circasia)->sum($quantity), 

            'circasia_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $circasia)->sum($quantity),

            'circasia_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $circasia)->sum($quantity), 

            'circasia_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $circasia)->sum($quantity),

            'circasia_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $circasia)->sum($quantity),

            'circasia_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $circasia)->sum($quantity),

            'circasia_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $circasia)->sum($quantity), 

            'circasia_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $circasia)->sum($quantity),

            'circasia_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $circasia)->sum($quantity),

            //Cantidad de material para el municipio de Córdoba

            'cordoba_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $cordoba)->sum($quantity), 

            'cordoba_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $cordoba)->sum($quantity),

            'cordoba_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $cordoba)->sum($quantity), 

            'cordoba_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $cordoba)->sum($quantity),

            'cordoba_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $cordoba)->sum($quantity),

            'cordoba_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $cordoba)->sum($quantity),

            'cordoba_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $cordoba)->sum($quantity), 

            'cordoba_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $cordoba)->sum($quantity),

            'cordoba_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $cordoba)->sum($quantity), 

            //Cantidad de material para el municipio de Filandia

            'filandia_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $filandia)->sum($quantity), 

            'filandia_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $filandia)->sum($quantity),

            'filandia_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $filandia)->sum($quantity), 

            'filandia_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $filandia)->sum($quantity),

            'filandia_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $filandia)->sum($quantity),

            'filandia_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $filandia)->sum($quantity),

            'filandia_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $filandia)->sum($quantity), 

            'filandia_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $filandia)->sum($quantity),

            'filandia_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $filandia)->sum($quantity), 

            //Cantidad de material para el municipio de Génova

            'genova_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $genova)->sum($quantity), 

            'genova_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $genova)->sum($quantity),

            'genova_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $genova)->sum($quantity), 

            'genova_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $genova)->sum($quantity),

            'genova_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $genova)->sum($quantity),

            'genova_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $genova)->sum($quantity),

            'genova_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $genova)->sum($quantity), 

            'genova_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $genova)->sum($quantity),

            'genova_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $genova)->sum($quantity),

            //Cantidad de material para el municipio de La Tebaida

            'tebaida_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $tebaida)->sum($quantity), 

            'tebaida_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $tebaida)->sum($quantity),

            'tebaida_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $tebaida)->sum($quantity), 

            'tebaida_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $tebaida)->sum($quantity),

            'tebaida_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $tebaida)->sum($quantity),

            'tebaida_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $tebaida)->sum($quantity),

            'tebaida_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $tebaida)->sum($quantity), 

            'tebaida_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $tebaida)->sum($quantity),

            'tebaida_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $tebaida)->sum($quantity),

            //Cantidad de material para el municipio de Montenegro

            'montenegro_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $montenegro)->sum($quantity), 

            'montenegro_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $montenegro)->sum($quantity),

            'montenegro_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $montenegro)->sum($quantity), 

            'montenegro_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $montenegro)->sum($quantity),

            'montenegro_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $montenegro)->sum($quantity),

            'montenegro_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $montenegro)->sum($quantity),

            'montenegro_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $montenegro)->sum($quantity), 

            'montenegro_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $montenegro)->sum($quantity),

            'montenegro_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $montenegro)->sum($quantity),

            //Cantidad de material para el municipio de Pijao

            'pijao_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $pijao)->sum($quantity), 

            'pijao_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $pijao)->sum($quantity),

            'pijao_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $pijao)->sum($quantity), 

            'pijao_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $pijao)->sum($quantity),

            'pijao_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $pijao)->sum($quantity),

            'pijao_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $pijao)->sum($quantity),

            'pijao_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $pijao)->sum($quantity), 

            'pijao_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $pijao)->sum($quantity),

            'pijao_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $pijao)->sum($quantity),

            //Cantidad de material para el municipio de Quimbaya

            'quimbaya_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $quimbaya)->sum($quantity), 

            'quimbaya_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $quimbaya)->sum($quantity),

            'quimbaya_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $quimbaya)->sum($quantity), 

            'quimbaya_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $quimbaya)->sum($quantity),

            'quimbaya_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $quimbaya)->sum($quantity),

            'quimbaya_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $quimbaya)->sum($quantity),

            'quimbaya_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $quimbaya)->sum($quantity), 

            'quimbaya_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $quimbaya)->sum($quantity),

            'quimbaya_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $quimbaya)->sum($quantity),

            //Cantidad de material para el municipio de Salento

            'salento_board' => $general_acopio->where($matype, $board)
                            ->where($municipality, $salento)->sum($quantity), 

            'salento_pet' => $general_acopio->where($matype, $pet)
                            ->where($municipality, $salento)->sum($quantity),

            'salento_archive' => $general_acopio->where($matype, $archive)
                            ->where($municipality, $salento)->sum($quantity), 

            'salento_blow' => $general_acopio->where($matype, $blow)
                            ->where($municipality, $salento)->sum($quantity),

            'salento_junk' => $general_acopio->where($matype, $junk)
                            ->where($municipality, $salento)->sum($quantity),

            'salento_metal' => $general_acopio->where($matype, $metal)
                            ->where($municipality, $salento)->sum($quantity),

            'salento_plega' => $general_acopio->where($matype, $plega)
                            ->where($municipality, $salento)->sum($quantity), 

            'salento_glass' => $general_acopio->where($matype, $glass)
                            ->where($municipality, $salento)->sum($quantity),

            'salento_frame' => $general_acopio->where($matype, $frame)
                            ->where($municipality, $salento)->sum($quantity),

        );
        $c_acopio = (object) $c_acopio;
        return view('admin.indicators.aindicator')->with('comuna', $comuna)->with('c_acopio', $c_acopio);
    }

    /**
     * 
     *Método obtiene la cantidad de material por cada cliente
     *
     */
    public function indexIndicatorThree(){
        // se obteniene la cantidad de materiales por cl
        global  $matype,$protype,$quantity,$board,$pet,$archive,$blow,$junk,$metal,$plega,$glass,$frame,$junkman,
                $association,$recycler,$fabric,$recuperator;       
        $general_cliente = material_provider::all();
        $cliente = array(
            //Cantidad de material para los chatarreros
            'junkman_board' => $general_cliente->where($matype, $board)
                            ->where($protype, $junkman)->sum($quantity), 

            'junkman_pet' => $general_cliente->where($matype, $pet)
                            ->where($protype, $junkman)->sum($quantity),

            'junkman_archive' => $general_cliente->where($matype, $archive)
                            ->where($protype, $junkman)->sum($quantity), 

            'junkman_blow' => $general_cliente->where($matype, $blow)
                            ->where($protype, $junkman)->sum($quantity),

            'junkman_junk' => $general_cliente->where($matype, $junk)
                            ->where($protype, $junkman)->sum($quantity),

            'junkman_metal' => $general_cliente->where($matype, $metal)
                            ->where($protype, $junkman)->sum($quantity),

            'junkman_plega' => $general_cliente->where($matype, $plega)
                            ->where($protype, $junkman)->sum($quantity), 

            'junkman_glass' => $general_cliente->where($matype, $glass)
                            ->where($protype, $junkman)->sum($quantity),

            'junkman_frame' => $general_cliente->where($matype, $frame)
                            ->where($protype, $junkman)->sum($quantity),
            //Cantidad de material para las asociaciones
            'association_board' => $general_cliente->where($matype, $board)
                            ->where($protype, $association)->sum($quantity), 

            'association_pet' => $general_cliente->where($matype, $pet)
                            ->where($protype, $association)->sum($quantity),

            'association_archive' => $general_cliente->where($matype, $archive)
                            ->where($protype, $association)->sum($quantity), 

            'association_blow' => $general_cliente->where($matype, $blow)
                            ->where($protype, $association)->sum($quantity),

            'association_junk' => $general_cliente->where($matype, $junk)
                            ->where($protype, $association)->sum($quantity),

            'association_metal' => $general_cliente->where($matype, $metal)
                            ->where($protype, $association)->sum($quantity),

            'association_plega' => $general_cliente->where($matype, $plega)
                            ->where($protype, $association)->sum($quantity), 

            'association_glass' => $general_cliente->where($matype, $glass)
                            ->where($protype, $association)->sum($quantity),

            'association_frame' => $general_cliente->where($matype, $frame)
                            ->where($protype, $association)->sum($quantity), 
             //Cantidad de material para los recuperadores de oficio
            'recuperator_board' => $general_cliente->where($matype, $board)
                            ->where($protype, $recuperator)->sum($quantity), 

            'recuperator_pet' => $general_cliente->where($matype, $pet)
                            ->where($protype, $recuperator)->sum($quantity),

            'recuperator_archive' => $general_cliente->where($matype, $archive)
                            ->where($protype, $recuperator)->sum($quantity), 

            'recuperator_blow' => $general_cliente->where($matype, $blow)
                            ->where($protype, $recuperator)->sum($quantity),

            'recuperator_junk' => $general_cliente->where($matype, $junk)
                            ->where($protype, $recuperator)->sum($quantity),

            'recuperator_metal' => $general_cliente->where($matype, $metal)
                            ->where($protype, $recuperator)->sum($quantity),

            'recuperator_plega' => $general_cliente->where($matype, $plega)
                            ->where($protype, $recuperator)->sum($quantity), 

            'recuperator_glass' => $general_cliente->where($matype, $glass)
                            ->where($protype, $recuperator)->sum($quantity),

            'recuperator_frame' => $general_cliente->where($matype, $frame)
                            ->where($protype, $recuperator)->sum($quantity),
            //Cantidad de material para los recicladores
            'recycler_board' => $general_cliente->where($matype, $board)
                            ->where($protype, $recycler)->sum($quantity), 

            'recycler_pet' => $general_cliente->where($matype, $pet)
                            ->where($protype, $recycler)->sum($quantity),

            'recycler_archive' => $general_cliente->where($matype, $archive)
                            ->where($protype, $recycler)->sum($quantity), 

            'recycler_blow' => $general_cliente->where($matype, $blow)
                            ->where($protype, $recycler)->sum($quantity),

            'recycler_junk' => $general_cliente->where($matype, $junk)
                            ->where($protype, $recycler)->sum($quantity),

            'recycler_metal' => $general_cliente->where($matype, $metal)
                            ->where($protype, $recycler)->sum($quantity),

            'recycler_plega' => $general_cliente->where($matype, $plega)
                            ->where($protype, $recycler)->sum($quantity), 

            'recycler_glass' => $general_cliente->where($matype, $glass)
                            ->where($protype, $recycler)->sum($quantity),

            'recycler_frame' => $general_cliente->where($matype, $frame)
                            ->where($protype, $recycler)->sum($quantity),

            //Cantidad de material para los puntos de fábrica

            'fabric_board' => $general_cliente->where($matype, $board)
                            ->where($protype, $fabric)->sum($quantity), 

            'fabric_pet' => $general_cliente->where($matype, $pet)
                            ->where($protype, $fabric)->sum($quantity),

            'fabric_archive' => $general_cliente->where($matype, $archive)
                            ->where($protype, $fabric)->sum($quantity), 

            'fabric_blow' => $general_cliente->where($matype, $blow)
                            ->where($protype, $fabric)->sum($quantity),

            'fabric_junk' => $general_cliente->where($matype, $junk)
                            ->where($protype, $fabric)->sum($quantity),

            'fabric_metal' => $general_cliente->where($matype, $metal)
                            ->where($protype, $fabric)->sum($quantity),

            'fabric_plega' => $general_cliente->where($matype, $plega)
                            ->where($protype, $fabric)->sum($quantity), 

            'fabric_glass' => $general_cliente->where($matype, $glass)
                            ->where($protype, $fabric)->sum($quantity),

            'fabric_frame' => $general_cliente->where($matype, $frame)
                            ->where($protype, $fabric)->sum($quantity), 
        );
        $cliente = (object) $cliente;
        return view('admin.indicators.clientIndicators')->with('cliente',$cliente);
    }

}
