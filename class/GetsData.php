<?php
class GetsData {
    public function installedPackages() {
        $installedPackages = array();
        exec('ls /var/log/packages', $installedPackages);
        natcasesort($installedPackages);
        return $installedPackages;
    }

    public function removedPackages() {
        $removedPackages = array();
        exec('ls /var/log/removed_packages', $removedPackages);
        natcasesort($removedPackages);
        return $removedPackages;
    }

    public function system() {
        $system = array();
        exec('uname -a', $system);
        return $system;
    }

    public function syslog() {
        $syslog = array();
        exec('tail -n 100 /var/log/syslog', $syslog);
        return array_reverse($syslog);
    }

    public function procs() {
        $procs = array();
        exec('ps -aux', $procs);
        return $procs;
    }

    public function mounted() {
        $mounted = array();
        exec('mount', $mounted);
        return $mounted;
    }

    public function netstat() {
        $netstat = array();
        exec('netstat -atu', $netstat);
        return $netstat;
    }
}
?>