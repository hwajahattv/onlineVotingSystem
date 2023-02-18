<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('public_departments')->delete();
        $departments= [
            ['name'=>'Auditor General\'s Office'],
            ['name'=>'Auditor-General\'s Office of Papua New Guinea'],
            ['name'=>'Bank of Papua New Guinea'],
            ['name'=>'Central Supply & Tenders Board (CSTB)'],
            ['name'=>'Civil Aviation Authority'],
            ['name'=>'Co-operative Societies of Papua New Guinea'],
            ['name'=>'Customs'],
            ['name'=>'Department for Community Development'],
            ['name'=>'Department of Agriculture & Livestock (DAL)'],
            ['name'=>'Department of Commerce & Industry'],
            ['name'=>'Department of Communication and Information (DCI) (off-line)'],
            ['name'=>'Department of Defence'],
            ['name'=>'Department of Education'],
            ['name'=>'Department of Environment & Conservation'],
            ['name'=>'Department of Finance'],
            ['name'=>'Department of Health'],
            ['name'=>'Department of Higher Education, Research, Science & Technology (DHERST)'],
            ['name'=>'Department of Labour & Industrial Relations (Foreign Employment Division)'],
            ['name'=>'Department of Lands and Physical Planning'],
            ['name'=>'Department of Mining (DoM)'],
            ['name'=>'Department of National Planning & Monitoring (DNPM)'],
            ['name'=>'Department of Personnel Management (DPM)'],
            ['name'=>'Department of Petroleum & Energy (DPE)'],
            ['name'=>'Department of Police (under construction)'],
            ['name'=>'Department Of Prime Minister and the National Executive Council (PM&NEC)'],
            ['name'=>'Department of Provincial and Local Government Affairs (DPLGA)'],
            ['name'=>'Department of Provincial and Local Level Affairs'],
            ['name'=>'Department of Treasury'],
            ['name'=>'Department of Works'],
            ['name'=>'Electoral Commission'],
            ['name'=>'Finance Department'],
            ['name'=>'Fire Service'],
            ['name'=>'Forestry Authority'],
            ['name'=>'Geological and Mineral Resource Information System of PNG'],
            ['name'=>'Government Printing Office (GPO)'],
            ['name'=>'Immigration & Citizenship Service'],
            ['name'=>'Independent Consumer & Competition Commission (ICCC)'],
            ['name'=>'Integrity (Registry) of Political Parties & Candidates Commission'],
            ['name'=>'Intellectual Property Office of Papua New Guinea'],
            ['name'=>'Internal Revenue Commission (IRC)'],
            ['name'=>'Investment Promotion Agency (IPA)'],
            ['name'=>'Law and Justice Sector'],
            ['name'=>'Magisterial Services'],
            ['name'=>'Medical Board'],
            ['name'=>'Milne Bay Tourism Bureau'],
            ['name'=>'Mineral Resources Authority (MRA)'],
            ['name'=>'Ministry of Inter Government Relations'],
            ['name'=>'National Capital District Commission (NCDC)'],
            ['name'=>'National Disaster Centre'],
            ['name'=>'National Economic and Fiscal Commission (NEFC)'],
            ['name'=>'National Fisheries Authority (NFA)'],
            ['name'=>'National Gaming Control Board'],
            ['name'=>'National Institute of Standards and Industrial Technology (NISIT)'],
            ['name'=>'National Parliament'],
            ['name'=>'National Research Institute'],
            ['name'=>'National Road Safety Council (NRSC)'],
            ['name'=>'National Statistics Office (NSO)'],
            ['name'=>'National Youth Commission (NYC)'],
            ['name'=>'NICTA PNG'],
            ['name'=>'Office of the Integrity of Political Parties and Candidates Commission'],
            ['name'=>'PNG Electoral Commission'],
            ['name'=>'Prime Minister'],
            ['name'=>'Prime Minister and Cabinet'],
            ['name'=>'Public Sector Reform'],
            ['name'=>'Radio communication and Telecommunication'],
            ['name'=>'Technical Authority (PANGTEL)'],
            ['name'=>'Tourism Promotion Authority (TPA)'],
            ['name'=>'Treasure Department'],
        ];
        DB::table('public_departments')->insert($departments);
    }
}
