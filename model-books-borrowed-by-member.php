<?php
function selectBooksBorrowedbyMembers($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select member_name, address, email, date_borrowed, return_date, librarian
                  from librarymember join borrowedbook on librarymember.member_id = borrowedbook.member_id where librarymember.member_id =?");
         $stmt->bind_param("i", $iid);
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
