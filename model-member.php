<?php
function selectLibraryMember() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT member_id, member_name, email, address FROM `librarymember`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
