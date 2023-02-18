<?php

namespace App\Repositories;



use Illuminate\Support\Facades\DB;


class StatsRepository
{

    public function compile($type, $coverage)
    {
        $replaced = str_replace('-', '', $coverage);
        if ($type == 1) {
            if ($coverage == 'overall') {
                $maritalStatusOverall = DB::table('voters')
                    ->select('maritalStatus', DB::raw('count(*) as total'))
                    ->groupBy('maritalStatus')
                    ->pluck('total', 'maritalStatus');
            } else {
                $maritalStatusOverall = DB::table('voters')
                    ->select('maritalStatus', DB::raw('count(*) as total'))
                    ->where('current_province', '=', $replaced)
                    ->groupBy('maritalStatus')
                    ->pluck('total', 'maritalStatus');
            }
            $data = $maritalStatusOverall;
        } elseif ($type == 2) {
            if ($coverage == 'overall') {
                $occupationDistribution = DB::table('voters')
                    ->select('occupation', DB::raw('count(*) as total'))
                    ->groupBy('occupation')
                    ->pluck('total', 'occupation');
            } else {
                $occupationDistribution = DB::table('voters')
                    ->select('occupation', DB::raw('count(*) as total'))
                    ->where('current_province', '=', $replaced)
                    ->groupBy('occupation')
                    ->pluck('total', 'occupation');
            }
            $data = $occupationDistribution;

        } elseif ($type == 3) {
            if ($coverage == 'overall') {
                $disabilityDistribution = DB::table('voters')
                    ->select('disabilityType', DB::raw('count(*) as total'))
                    ->groupBy('disabilityType')
                    ->pluck('total', 'disabilityType');
            } else {
                $disabilityDistribution = DB::table('voters')
                    ->select('disabilityType', DB::raw('count(*) as total'))
                    ->where('current_province', '=', $replaced)
                    ->groupBy('disabilityType')
                    ->pluck('total', 'disabilityType');
            }
            $data = $disabilityDistribution;
        } elseif ($type == 4) {
            if ($coverage == 'overall') {
                $religionDistribution = DB::table('voters')
                    ->select('religion', DB::raw('count(*) as total'))
                    ->groupBy('religion')
                    ->pluck('total', 'religion');
            } else {
                $religionDistribution = DB::table('voters')
                    ->select('religion', DB::raw('count(*) as total'))
                    ->where('current_province', '=', $replaced)
                    ->groupBy('religion')
                    ->pluck('total', 'religion');
            }
            $data = $religionDistribution;
        }
        else{
            $data = null;
        }
        if($data == null){
            return $msg = ['error' => 'No data'];
        }
            return $msg = ['status' => 'success', 'data' => $data];
    }
}
