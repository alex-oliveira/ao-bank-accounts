<?php

use Illuminate\Database\Seeder;

class AoBankAccountsBanksSeeder extends Seeder
{

    public function run()
    {
        $items = [
            ['number' => '992', 'alias' => '', 'name' => 'ABBI'],
            ['number' => '117', 'alias' => '', 'name' => 'ADVANCED CORRETORA DE CAMBIO LTDA'],
            ['number' => '123', 'alias' => '', 'name' => 'AGIPLAN FINANCEIRA S.A. CRéDITO, FINANCIAMENTO E I'],
            ['number' => '997', 'alias' => '', 'name' => 'ASSOCIACAO DE BANCOS ESTADUAIS'],
            ['number' => '246', 'alias' => '', 'name' => 'BANCO ABC BRASIL S.A.'],
            ['number' => '075', 'alias' => '', 'name' => 'BANCO ABN AMRO S.A.'],
            ['number' => '654', 'alias' => '', 'name' => 'BANCO A.J. RENNER S.A.'],
            ['number' => '025', 'alias' => '', 'name' => 'BANCO ALFA S.A.'],
            ['number' => '213', 'alias' => '', 'name' => 'BANCO ARBI S.A.'],
            ['number' => '019', 'alias' => '', 'name' => 'BANCO AZTECA DO BRASIL S.A.'],
            ['number' => '740', 'alias' => '', 'name' => 'BANCO BARCLAYS S.A.'],
            ['number' => '107', 'alias' => '', 'name' => 'BANCO BBM S.A'],
            ['number' => '096', 'alias' => '', 'name' => 'Banco BMFBovespa'],
            ['number' => '318', 'alias' => '', 'name' => 'BANCO BMG S.A.'],
            ['number' => '752', 'alias' => '', 'name' => 'BANCO BNP PARIBAS BRASIL S.A'],
            ['number' => '248', 'alias' => '', 'name' => 'BANCO BOA VISTA INTERATLANTICO S.A'],
            ['number' => '218', 'alias' => '', 'name' => 'BANCO BONSUCESSO S.A.'],
            ['number' => '065', 'alias' => '', 'name' => 'BANCO BRACCE S.A.'],
            ['number' => '063', 'alias' => '', 'name' => 'BANCO BRADESCARD S.A.'],
            ['number' => '036', 'alias' => '', 'name' => 'BANCO BRADESCO BBI S.A'],
            ['number' => '204', 'alias' => '', 'name' => 'BANCO BRADESCO CARTOES S.A.'],
            ['number' => '394', 'alias' => '', 'name' => 'BANCO BRADESCO FINANCIAMENTOS S.A.'],
            ['number' => '﻿237', 'alias' => '', 'name' => 'BANCO BRADESCO S.A.'],
            ['number' => '208', 'alias' => '', 'name' => 'ANCO BTG PACTUAL S.A.'],
            ['number' => '263', 'alias' => '', 'name' => 'BANCO CACIQUE S.A.'],
            ['number' => '473', 'alias' => '', 'name' => 'BANCO CAIXA GERAL - BRASIL S.A.'],
            ['number' => '412', 'alias' => '', 'name' => 'BANCO CAPITAL S.A.'],
            ['number' => '040', 'alias' => '', 'name' => 'BANCO CARGILL S.A'],
            ['number' => '266', 'alias' => '', 'name' => 'BANCO CEDULA S.A.'],
            ['number' => '739', 'alias' => '', 'name' => 'BANCO CETELEM S.A.'],
            ['number' => '233', 'alias' => '', 'name' => 'BANCO CIFRA S.A.'],
            ['number' => '745', 'alias' => '', 'name' => 'BANCO CITIBANK S.A.'],
            ['number' => '241', 'alias' => '', 'name' => 'BANCO CLASSICO S.A.'],
            ['number' => '095', 'alias' => '', 'name' => 'BANCO CONFIDENCE DE CAMBIO S.A.'],
            ['number' => '756', 'alias' => '', 'name' => 'BANCO COOPERATIVO DO BRASIL S.A.'],
            ['number' => '748', 'alias' => '', 'name' => 'BANCO COOPERATIVO SICREDI S.A.'],
            ['number' => '222', 'alias' => '', 'name' => 'BANCO CREDIT AGRICOLE BRASIL S.A.'],
            ['number' => '505', 'alias' => '', 'name' => 'BANCO CREDIT SUISSE (BRASIL) S.A.'],
            ['number' => '003', 'alias' => '', 'name' => 'BANCO DA AMAZONIA S.A.'],
            ['number' => '083', 'alias' => '', 'name' => 'BANCO DA CHINA BRASIL S.A.'],
            ['number' => '707', 'alias' => '', 'name' => 'BANCO DAYCOVAL S.A.'],
            ['number' => '300', 'alias' => '', 'name' => 'BANCO DE LA NACION ARGENTINA'],
            ['number' => '495', 'alias' => '', 'name' => 'BANCO DE LA PROVINCIA DE BUENOS AIRES'],
            ['number' => '494', 'alias' => '', 'name' => 'BANCO DE LA REPUBLICA ORIENTAL DEL URUGUAY'],
            ['number' => '456', 'alias' => '', 'name' => 'BANCO DE TOKYO MITSUBISHI UFJ BRASIL S.A'],
            ['number' => '214', 'alias' => '', 'name' => 'BANCO DIBENS S.A.'],
            ['number' => '001', 'alias' => '', 'name' => 'BANCO DO BRASIL S.A.'],
            ['number' => '047', 'alias' => '', 'name' => 'BANCO DO ESTADO DE SERGIPE S.A.'],
            ['number' => '037', 'alias' => '', 'name' => 'BANCO DO ESTADO DO PARA S.A.'],
            ['number' => '041', 'alias' => '', 'name' => 'BANCO DO ESTADO DO RIO GRANDE DO SUL S.A.'],
            ['number' => '004', 'alias' => '', 'name' => 'BANCO DO NORDESTE DO BRASIL S.A.'],
            ['number' => '265', 'alias' => '', 'name' => 'BANCO FATOR S.A.'],
            ['number' => '224', 'alias' => '', 'name' => 'BANCO FIBRA S.A.'],
            ['number' => '626', 'alias' => '', 'name' => 'BANCO FICSA S.A.'],
            ['number' => '121', 'alias' => '', 'name' => 'BANCO GERADOR S.A.'],
            ['number' => '612', 'alias' => '', 'name' => 'BANCO GUANABARA S.A.'],
            ['number' => '604', 'alias' => '', 'name' => 'BANCO INDUSTRIAL DO BRASIL S. A.'],
            ['number' => '320', 'alias' => '', 'name' => 'BANCO INDUSTRIAL E COMERCIAL S.A.'],
            ['number' => '653', 'alias' => '', 'name' => 'BANCO INDUSVAL S.A.'],
            ['number' => '630', 'alias' => '', 'name' => 'BANCO INTERCAP S.A.'],
            ['number' => '077', 'alias' => '', 'name' => 'BANCO INTERMEDIUM S.A.'],
            ['number' => '249', 'alias' => '', 'name' => 'BANCO INVESTCRED UNIBANCO S.A'],
            ['number' => '184', 'alias' => '', 'name' => 'BANCO ITAU BBA S.A'],
            ['number' => '652', 'alias' => '', 'name' => 'BANCO ITAU HOLDING FINANCEIRA S.A'],
            ['number' => '217', 'alias' => '', 'name' => 'BANCO JOHN DEERE S.A.'],
            ['number' => '376', 'alias' => '', 'name' => 'BANCO J.P. MORGAN S.A.'],
            ['number' => '074', 'alias' => '', 'name' => 'BANCO J. SAFRA S.A.'],
            ['number' => '076', 'alias' => '', 'name' => 'BANCO KDB DO BRASIL S.A'],
            ['number' => '757', 'alias' => '', 'name' => 'BANCO KEB DO BRASIL S.A.'],
            ['number' => '600', 'alias' => '', 'name' => 'BANCO LUSO BRASILEIRO S.A.'],
            ['number' => '243', 'alias' => '', 'name' => 'BANCO MAXIMA S.A.'],
            ['number' => '389', 'alias' => '', 'name' => 'BANCO MERCANTIL DO BRASIL S.A.'],
            ['number' => '370', 'alias' => '', 'name' => 'BANCO MIZUHO DO BRASIL S.A.'],
            ['number' => '746', 'alias' => '', 'name' => 'BANCO MODAL S.A.'],
            ['number' => '066', 'alias' => '', 'name' => 'BANCO MORGAN STANLEY DEAN WITTER S.A'],
            ['number' => '079', 'alias' => '', 'name' => 'BANCO ORIGINAL DO AGRONEGOCIO S.A.'],
            ['number' => '212', 'alias' => '', 'name' => 'BANCO ORIGINAL S.A.'],
            ['number' => '623', 'alias' => '', 'name' => 'BANCO PAN S.A.'],
            ['number' => '611', 'alias' => '', 'name' => 'BANCO PAULISTA S.A.'],
            ['number' => '613', 'alias' => '', 'name' => 'BANCO PECUNIA S.A.'],
            ['number' => '094', 'alias' => '', 'name' => 'BANCO PETRA S.A.'],
            ['number' => '643', 'alias' => '', 'name' => 'BANCO PINE S.A.'],
            ['number' => '735', 'alias' => '', 'name' => 'BANCO POTTENCIAL S.A.'],
            ['number' => '747', 'alias' => '', 'name' => 'BANCO RABOBANK INTERNATIONAL BRASIL S.A.'],
            ['number' => '088', 'alias' => '', 'name' => 'BANCO RANDON S.A.'],
            ['number' => '633', 'alias' => '', 'name' => 'BANCO RENDIMENTO S.A.'],
            ['number' => '741', 'alias' => '', 'name' => 'BANCO RIBEIRAO PRETO S.A.'],
            ['number' => '120', 'alias' => '', 'name' => 'BANCO RODOBENS S.A'],
            ['number' => '422', 'alias' => '', 'name' => 'BANCO SAFRA S.A.'],
            ['number' => '033', 'alias' => '', 'name' => 'BANCO SANTANDER (BRASIL) S.A.'],
            ['number' => '743', 'alias' => '', 'name' => 'BANCO SEMEAR S.A.'],
            ['number' => '366', 'alias' => '', 'name' => 'BANCO SOCIETE GENERALE BRASIL S.A'],
            ['number' => '637', 'alias' => '', 'name' => 'BANCO SOFISA S.A.'],
            ['number' => '464', 'alias' => '', 'name' => 'BANCO SUMITOMO MITSUI BRASILEIRO S.A.'],
            ['number' => '082', 'alias' => '', 'name' => 'BANCO TOPAZIO S.A.'],
            ['number' => '634', 'alias' => '', 'name' => 'BANCO TRIANGULO S.A.'],
            ['number' => '655', 'alias' => '', 'name' => 'BANCO VOTORANTIM S.A.'],
            ['number' => '610', 'alias' => '', 'name' => 'BANCO VR S.A.'],
            ['number' => '119', 'alias' => '', 'name' => 'BANCO WESTERN UNION DO BRASIL S.A.'],
            ['number' => '124', 'alias' => '', 'name' => 'BANCO WOORI BANK DO BRASIL S.A'],
            ['number' => '021', 'alias' => '', 'name' => 'BANESTES S.A BANCO DO ESTADO DO ESPIRITO SANTO'],
            ['number' => '719', 'alias' => '', 'name' => 'BANIF-BANCO INTERNACIONAL DO FUNCHAL (BRASIL) S.A'],
            ['number' => '755', 'alias' => '', 'name' => 'BANK OF AMERICA MERRILL LYNCH BANCO MULTIPLO S.A.'],
            ['number' => '991', 'alias' => '', 'name' => 'BBBIRO'],
            ['number' => '081', 'alias' => '', 'name' => 'BBN BANCO BRASILEIRO DE NEGOCIOS S.A'],
            ['number' => '250', 'alias' => '', 'name' => 'BCV - BANCO DE CREDITO E VAREJO S.A'],
            ['number' => '078', 'alias' => '', 'name' => 'BES INVESTIMENTO DO BRASIL SA - BANCO DE INVESTIM.'],
            ['number' => '129', 'alias' => '', 'name' => 'BI UBS Brasil'],
            ['number' => '712', 'alias' => '', 'name' => 'BM Ourinvest'],
            ['number' => '018', 'alias' => '', 'name' => 'BM TRICURY S.A.'],
            ['number' => '007', 'alias' => '', 'name' => 'BNDES'],
            ['number' => '017', 'alias' => '', 'name' => 'BNY MELLON S.A.'],
            ['number' => '069', 'alias' => '', 'name' => 'BPN BRASIL BANCO MULTIPLO S.A'],
            ['number' => '122', 'alias' => '', 'name' => 'Bradesco BERJ'],
            ['number' => '125', 'alias' => '', 'name' => 'BRASIL PLURAL S.A. BANCO MULTIPLO'],
            ['number' => '070', 'alias' => '', 'name' => 'BRB - BANCO DE BRASILIA S.A.'],
            ['number' => '092', 'alias' => '', 'name' => 'BRICKELL S A CREDITO, FINANCIAMENTO E INVESTIMENTO'],
            ['number' => '126', 'alias' => '', 'name' => 'BR PARTNERS BANCO DE INVESTIMENTO S.A.'],
            ['number' => '080', 'alias' => '', 'name' => 'B&T ASSOCIADOS CORRETORA DE CAMBIO LTDA.'],
            ['number' => '995', 'alias' => '', 'name' => 'BUREAU ABBC'],
            ['number' => '993', 'alias' => '', 'name' => 'BUREAU BCN'],
            ['number' => '996', 'alias' => '', 'name' => 'BUREAU FEBRABAN'],
            ['number' => '994', 'alias' => '', 'name' => 'BUREAU NACIONAL'],
            ['number' => '104', 'alias' => '', 'name' => 'CAIXA ECONOMICA FEDERAL'],
            ['number' => '130', 'alias' => '', 'name' => 'CARUANA S.A. SOCIEDADE DE CRéDITO FINANCIAMENTO E'],
            ['number' => '010', 'alias' => '', 'name' => 'CC CREDICOAMO CREDITO RURAL COOPERATIVA'],
            ['number' => '112', 'alias' => '', 'name' => 'CC UNICRED BRASIL CENTRAL'],
            ['number' => '084', 'alias' => '', 'name' => 'CC UNIPRIME NORTE DO PARANA'],
            ['number' => '114', 'alias' => '', 'name' => 'CECOOPES-CENTRAL DAS COOP DE ECON E CRED MUTUO DO'],
            ['number' => '477', 'alias' => '', 'name' => 'CITIBANK N.A.'],
            ['number' => '127', 'alias' => '', 'name' => 'CODEPE - CORRETORA DE VALORES S.A.'],
            ['number' => '060', 'alias' => '', 'name' => 'Confidence Corretora de Cambio S.A.'],
            ['number' => '090', 'alias' => '', 'name' => 'COOPERATIVA CENTRAL DE CREDITO DO ESTADO DE SP'],
            ['number' => '097', 'alias' => '', 'name' => 'COOPERATIVA CENTRAL DE CREDITO NOROESTE BRASILEIRO'],
            ['number' => '085', 'alias' => '', 'name' => 'COOPERATIVA CENTRAL DE CREDITO URBANO - CECRED'],
            ['number' => '016', 'alias' => '', 'name' => 'COOPERATIVA DE CRéDITO MúTUO DOS DESPACHANTES DE T'],
            ['number' => '089', 'alias' => '', 'name' => 'COOPERATIVA DE CREDITO RURAL DA REGIAO DA MOGIANA'],
            ['number' => '901', 'alias' => '', 'name' => 'CORRETORA SOUZA BARROS CAMBIO E TITULOS S.A.'],
            ['number' => '098', 'alias' => '', 'name' => 'CREDIALIANCA COOPERATIVA DE CREDITO RURAL'],
            ['number' => '011', 'alias' => '', 'name' => 'CREDIT SUISSE HEDGING-GRIFFO CORRETORA DE VALORES'],
            ['number' => '487', 'alias' => '', 'name' => 'DEUTSCHE BANK S. A. - BANCO ALEMAO'],
            ['number' => '064', 'alias' => '', 'name' => 'GOLDMAN SACHS DO BRASIL-BANCO MULTIPLO S.A'],
            ['number' => '062', 'alias' => '', 'name' => 'HIPERCARD BANCO MULTIPLO S.A'],
            ['number' => '399', 'alias' => '', 'name' => 'HSBC BANK BRASIL S.A.-BANCO MULTIPLO'],
            ['number' => '132', 'alias' => '', 'name' => 'ICBC DO BRASIL BANCO MúLTIPLO S.A.'],
            ['number' => '492', 'alias' => '', 'name' => 'ING BANK N.V.'],
            ['number' => '341', 'alias' => '', 'name' => 'ITAU UNIBANCO S.A.'],
            ['number' => '488', 'alias' => '', 'name' => 'JPMORGAN CHASE BANK'],
            ['number' => '105', 'alias' => '', 'name' => 'LECCA CREDITO FINANCIAMENTO E INVESTIMENTO S.A.'],
            ['number' => '113', 'alias' => '', 'name' => 'MAGLIANO S.A CORRETORA CAMBIO E VALORES MOBILIARIO'],
            ['number' => '014', 'alias' => '', 'name' => 'NATIXIS BRASIL S.A. - BANCO MúLTIPLO'],
            ['number' => '753', 'alias' => '', 'name' => 'Novo Banco Continental'],
            ['number' => '111', 'alias' => '', 'name' => 'OLIVEIRA TRUST DISTRIBUIDORA TITULOS VALORES MOBIL'],
            ['number' => '254', 'alias' => '', 'name' => 'PARANA BANCO S.A.'],
            ['number' => '100', 'alias' => '', 'name' => 'PLANNER CORRETORA DE VALORES S A'],
            ['number' => '093', 'alias' => '', 'name' => 'POLOCRED SOC CRED MICROEMP LTDA'],
            ['number' => '108', 'alias' => '', 'name' => 'PORTOCRED S A CREDITO FINANCIAMENTO E INVESTIMENTO'],
            ['number' => '101', 'alias' => '', 'name' => 'RENASCENCA DISTR TIT E VALORES MOBILIARIOS LTDA'],
            ['number' => '751', 'alias' => '', 'name' => 'SCOTIABANK BRASIL S.A BANCO MULTIPLO'],
            ['number' => '131', 'alias' => '', 'name' => 'SC Tullett Prebon'],
            ['number' => '015', 'alias' => '', 'name' => 'SC UBS Brasil'],
            ['number' => '013', 'alias' => '', 'name' => 'SENSO CORRETORA DE CAMBIO E VALORES MOBILIARIOS S.A.'],
            ['number' => '118', 'alias' => '', 'name' => 'STANDARD CHARTERED BANK BRASIL S.A. - BANCO DE INV'],
            ['number' => '138', 'alias' => '', 'name' => 'TURMALINA CORRETORA DE CAMBIO S.A.'],
            ['number' => '230', 'alias' => '', 'name' => 'UNICARD BANCO MULTIPLO S.A'],
            ['number' => '091', 'alias' => '', 'name' => 'UNICRED CENTRAL RS - CENTRAL DE COOP ECON CRED MUT'],
            ['number' => '087', 'alias' => '', 'name' => 'UNICRED CENTRAL SANTA CATARINA'],
            ['number' => '099', 'alias' => '', 'name' => 'UNIPRIME CENTRAL - CENTRAL INT DE COOP DE CRED LTD'],
            ['number' => '102', 'alias' => '', 'name' => 'XP INVEST CORRETORA DE CAMBIO TIT E VALORES MOB S.A.'],
        ];

        foreach ($items as $item) {
            AoBankAccounts\Models\Bank::create([
                'number' => $item['number'],
                'name' => $item['name'],
                //'alias' => $item['alias']
            ]);
        }
    }

}
