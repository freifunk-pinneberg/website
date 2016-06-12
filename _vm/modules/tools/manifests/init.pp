class tools {

  # package install list
  $packages = [
    "curl",
    "vim",
    "git",
    "htop"
  ]

  # install packages
  package { $packages:
    ensure => present,
    require => Exec["apt-get update"]
  }
}
