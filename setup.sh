#! /bin/sh -e

help_msg() {
    cat << EOF
Usage: ./$(basename "$0") [OPTIONS]

Options:
    run            Run the project.
    deploy [DIR]   Copy project files to given directory.
EOF
}

exists_in_path() {
    [ "$(command -v "$1")" ] || {
        printf "Missing dependency: %s\n" "$1"
        return 1
    }
}

run_project() {
    php -S localhost:"${PORT:-8000}"
}

deploy_project() {
    [ -z "$1" ] && {
        echo "No directory given."
        return 1
    }

    [ -d "$1" ] || {
        echo "No such directory."
        return 1
    }

    cd "$(dirname "$(basename "$0")")"
    rsync -aAXv --exclude "$(basename "$0")" --exclude README.md -- * "$1"
}

main() {
    case "$1" in
        run)
            exists_in_path php
            run_project
        ;;
        deploy)
            exists_in_path rsync
            deploy_project "$2"
            ;;
        *)
            help_msg
        ;;
    esac
}

main "$@"
